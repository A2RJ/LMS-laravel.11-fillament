<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Course;
use App\Models\UserCourse;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::query()
            ->withCount([
                'users as total_students' => function (Builder $query) {
                    $query->select(DB::raw('count(distinct users.id)'));
                }
            ])
            ->withCount([
                'courses as total_teachers' => function (Builder $query) {
                    $query->join('users', 'courses.user_id', '=', 'users.id')
                        ->select(DB::raw('count(distinct users.id)'));
                }
            ])
            ->paginate(4);

        $courses = Course::query()
            ->withCount([
                'users as total_students' => function (Builder $query) {
                    $query->select(DB::raw('count(distinct users.id)'));
                }
            ])
            ->paginate(8);

        return view('welcome', compact('courses', 'categories'));
    }

    public function categoryId($category)
    {
        $search = request('search');

        $category = Category::whereId($category)
            ->withCount([
                'users as total_students' => function (Builder $query) {
                    $query->select(DB::raw('count(distinct users.id)'));
                }
            ])
            ->withCount([
                'courses as total_teachers' => function (Builder $query) {
                    $query->join('users', 'courses.user_id', '=', 'users.id')
                        ->select(DB::raw('count(distinct users.id)'));
                }
            ])
            ->first();
        $courses = Course::whereCategoryId($category->id)
            ->when($search, function ($query, $search) {
                $query->where('title', 'like', '%' . $search . '%');
            })->paginate(8);

        return view('category', compact('category', 'courses'));
    }

    public function courseId(Course $course)
    {
        return view('class', compact('course'));
    }

    public function session(Course $course)
    {

        $course->load(['sessions.preTest', 'sessions.postTest']);
        $perPage = 1;
        $currentPage = request('page', 1);
        $session_list = collect($course->sessions->all())->toArray();
        $currentItems = array_slice($session_list, ($currentPage - 1) * $perPage, $perPage);
        $sessions = new LengthAwarePaginator(
            $currentItems,
            count($session_list),
            $perPage,
            $currentPage,
            ['path' => request()->url(), 'query' => request()->query()]
        );
        $data = $sessions->getCollection()->first();

        return view('session', compact('course', 'data', 'sessions'));
    }

    public function course()
    {
        $search = request('search');

        $courses = Course::query()
            ->when($search, function ($query, $search) {
                $query->where('title', 'like', '%' . $search . '%')
                    ->orWhereHas('category', function ($query) use ($search) {
                        $query->where('category', 'like', '%' . $search . '%');
                    });
            })
            ->paginate(8);

        return view('course', compact('courses'));
    }

    public function joinCourse(Course $course)
    {
        UserCourse::create([
            'course_id' => $course->id,
            'user_id' => Auth::id()
        ]);

        return back()->with('success', 'Successfully joined the course');
    }

    public function myCourse()
    {
        $classes = Course::query()
            ->paginate(8);
        return view('my-course', compact('classes'));
    }
}

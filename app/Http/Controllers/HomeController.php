<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Attendance;
use App\Models\Category;
use App\Models\Course;
use App\Models\Session;
use App\Models\UserCourse;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Http\Request;
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

    public function courseId($course)
    {
        $userId = Auth::id();
        $course = Course::whereId($course)
            ->with([
                'author',
                'sessions' => function ($query) {
                    $query->with(['preTest', 'postTest']);
                }
            ])
            ->first();
        $session_list = Session::query()
            ->whereCourseId($course->id)
            ->with(['attendances' => function (HasMany $query) use ($userId) {
                $query->where('user_id', $userId)->limit(1);
            }])
            ->get();
        $session_list->each(function ($session) {
            if ($session->attendances->isNotEmpty()) {
                $session->attendance = true;
            } else {
                $session->attendance = null;
            }
            unset($session->attendances);
        });

        $totalPreTests = $course->sessions->whereNotNull('pre_test_id')->count();
        $totalPostTests = $course->sessions->whereNotNull('post_test_id')->count();
        $totalTest = (int) $totalPreTests + (int) $totalPostTests;

        $userId = Auth::id();

        $exists = UserCourse::whereCourseId($course->id)
            ->whereUserId($userId)
            ->exists();

        return view('course', compact('course', 'totalTest', 'exists', 'session_list'));
    }

    public function session(Course $course)
    {
        $userId = Auth::id();
        $course->load(['sessions.preTest', 'sessions.postTest']);
        $perPage = 1;
        $currentPage = request('page', 1);
        $session_list = Session::query()
            ->whereCourseId($course->id)
            ->with(['attendances' => function (HasMany $query) use ($userId) {
                $query->where('user_id', $userId)->limit(1);
            }])
            ->get();
        $session_list->each(function ($session) {
            if ($session->attendances->isNotEmpty()) {
                $session->attendance = true;
            } else {
                $session->attendance = null;
            }
            unset($session->attendances);
        });

        $currentItems = array_slice($session_list->toArray(), ($currentPage - 1) * $perPage, $perPage);
        $sessions = new LengthAwarePaginator(
            $currentItems,
            count($session_list),
            $perPage,
            $currentPage,
            ['path' => request()->url(), 'query' => request()->query()]
        );
        $data = $sessions->getCollection()->first();

        $is_already_attendance = Attendance::query()
            ->whereSessionId($data['id'])
            ->whereCourseId($course->id)
            ->whereUserId(Auth::id())
            ->exists();

        return view('session', compact('course', 'data', 'sessions', 'session_list', 'is_already_attendance'));
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
        $userId = Auth::id();

        $exists = UserCourse::where('course_id', $course->id)
            ->where('user_id', $userId)
            ->exists();

        if ($exists)
            return abort(401);

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

    public function markAttendance(Request $request, Course $course, Session $session)
    {
        $userId = Auth::id();

        $exists = Attendance::whereSessionId($session->id)
            ->whereUserId($userId)
            ->whereCourseId($course->id)
            ->exists();

        if ($exists) {
            return back()->with('error', 'You have already marked your attendance for this session.');
        }

        Attendance::create([
            'user_id' => $userId,
            'course_id' => $course->id,
            'session_id' => $session->id,
        ]);

        return back()->with('success', 'Attendance marked successfully.');
    }
}

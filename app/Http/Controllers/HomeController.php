<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Attendance;
use App\Models\Category;
use App\Models\Course;
use App\Models\Session;
use App\Models\UserCourse;
use Illuminate\Database\Eloquent\Builder;
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
            ->with(['attendance'])
            ->get();
        $session_list->each(function ($session) {
            if ($session->attendances->isNotEmpty()) {
                $session->attendance = true;
            } else {
                $session->attendance = null;
            }
            unset($session->attendances);
        });

        $totalSessions = count($session_list);
        $attendedSessions = count(array_filter($session_list->toArray(), fn($session) => $session['attendance']));
        if ($totalSessions == 0) {
            $progressPercentage = 0;
        } else {
            $progressPercentage = number_format(($attendedSessions / $totalSessions) * 100);
        }
        $progressPercentageStyle = "style='width: " . $progressPercentage . "%'";

        $totalPreTests = $course->sessions->whereNotNull('pre_test_id')->count();
        $totalPostTests = $course->sessions->whereNotNull('post_test_id')->count();
        $totalTest = (int) $totalPreTests + (int) $totalPostTests;

        $userId = Auth::id();

        $exists = UserCourse::whereCourseId($course->id)
            ->whereUserId($userId)
            ->exists();

        return view('course', compact('course', 'totalTest', 'exists', 'session_list', 'progressPercentage', 'progressPercentageStyle'));
    }

    public function session(Course $course)
    {
        $userId = Auth::id();
        $perPage = 1;
        $page = request('page', 1);
        $session_list = Session::query()
            ->whereCourseId($course->id)
            ->with([
                'preTest',
                'preTest.preTestResult',
                'postTest',
                'postTest.postTestResult',
                'attendance'
            ])
            ->get();

        $session_list->each(function ($session) use ($userId) {
            if ($session->preTest) {
                if ($session->preTest->preTestResult->isNotEmpty()) {
                    $session->preTestDone = true;
                    $session->preTestNumber = $session->preTest->preTestResult->first()->test_number;
                } else {
                    $session->preTestDone = false;
                }
            } else {
                $session->preTestDone = true;
            }

            if ($session->postTest) {
                if ($session->postTest->postTestResult->isNotEmpty()) {
                    $session->postTestDone = true;
                    $session->postTestNumber = $session->postTest->postTestResult->first()->test_number;
                } else {
                    $session->postTestDone = false;
                }
            } else {
                $session->postTestDone = true;
            }
        });

        $paginateItems = array_slice($session_list->toArray(), ($page - 1) * $perPage, $perPage);
        $sessions = new LengthAwarePaginator(
            $paginateItems,
            count($session_list),
            $perPage,
            $page,
            ['path' => request()->url(), 'query' => request()->query()]
        );
        $data = $session_list->where('id', $sessions->getCollection()->first()['id'])->first();

        return view('session', compact('course', 'data', 'sessions', 'session_list'));
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

        return view('courses', compact('courses'));
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
        $userId = Auth::id();
        $classes = Course::query()
            ->whereHas('userCourses', function (Builder $query) use ($userId) {
                $query->where('user_id', $userId);
            })
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
            return back()->with('failed', 'You have already marked your attendance for this session.');
        }

        Attendance::create([
            'user_id' => $userId,
            'course_id' => $course->id,
            'session_id' => $session->id,
        ]);

        return back()->with('success', 'Attendance marked successfully.');
    }
}

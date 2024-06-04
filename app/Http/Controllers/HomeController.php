<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\ClassRoom;
use App\Models\Session;
use App\Models\Test;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::query()
            ->paginate(4);
        $classes = ClassRoom::query()
            ->paginate(8);
        return view('welcome', compact('classes', 'categories'));
    }

    public function categoryId($id)
    {
        return view('category');
    }

    public function classId(ClassRoom $class)
    {
        return view('class', compact('class'));
    }

    public function classSession(ClassRoom $class)
    {
        $perPage = 1;
        $currentPage = request('page', 1);
        $session_list = collect($class->sessions->all())->toArray();
        $currentItems = array_slice($session_list, ($currentPage - 1) * $perPage, $perPage);
        $sessions = new LengthAwarePaginator(
            $currentItems,
            count($session_list),
            $perPage,
            $currentPage,
            ['path' => request()->url(), 'query' => request()->query()]
        );
        $session = $class->sessions[$currentPage - 1];

        return view('session', compact('class', 'session', 'sessions'));
    }

    public function course()
    {
        $classes = ClassRoom::query()
            ->paginate(8);
        return view('course', compact('classes'));
    }

    public function myCourse()
    {
        $classes = ClassRoom::query()
            ->paginate(8);
        return view('my-course', compact('classes'));
    }

    public function testId(ClassRoom $class, Test $test)
    {
        $class->load(['sessions' => function ($query) use ($test) {
            $query
                ->whereHas('preTest', function ($q) use ($test) {
                    $q->where('id', $test->id);
                })
                ->orWhereHas('postTest', function ($q) use ($test) {
                    $q->where('id', $test->id);
                })
                ->first();
        }]);
        $class->session = $class->sessions->first();
        unset($class->sessions);

        if (!$class->session) return back()->with('failed', "Test not valid");

        if ($class->session?->pre_test_id == $test->id || $class->session?->post_test_id == $test->id) {
            $questions = $test->questions->load('answers')->filter(function ($question) {
                return $question->answers->isNotEmpty();
            })->values()->shuffle();

            if ($questions->count() == 0) return back()->with('failed', "Test doesn't have question list");
            return view('test', compact('questions'));
        } else {
            return abort(404);
        }
    }

    public function storeTestId(Request $request, $test)
    {
        return $request->all();
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\ClassRoom;
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

        $class->load(['sessions.preTest', 'sessions.postTest']);
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
        $data = $sessions->getCollection()->first();

        return view('session', compact('class', 'data', 'sessions'));
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
}

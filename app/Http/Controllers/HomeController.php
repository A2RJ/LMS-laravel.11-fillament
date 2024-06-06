<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\ClassRoom;
use App\Models\Test;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Auth;

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

    public function testId(ClassRoom $class, Test $test)
    {
        $type = request('test', null);

        $relation = $type == 'pre' ? 'preTest' : 'postTest';

        $class->load(['sessions' => function ($query) use ($relation, $test) {
            $query->with([$relation => function (BelongsTo $q) use ($test) {
                $q->where('id', $test->id)
                    ->with([
                        'questions' => function (HasMany $query) {
                            $query->whereHas('answers');
                        },
                        'questions.answers'
                    ]);
            }])->first();
        }])->first();

        $class->session = $class->sessions->first();
        $class->test = $class->session->$relation;
        unset($class->sessions);

        if (!isset($class->session->$relation)) return abort(404, "Test not valid");

        return view('test', compact('class'));
    }

    // TODO Bagaimana ambil preTest/postTest id di halaman test untuk dikirim ke fungsi simpan test
    public function storeTestId(Request $request, $class, $test_type_id, $session, $test)
    {
        $user_id = Auth::id();
        $data = $request->all();
        $test_type = $test == 'pre' ? 'pre_test_id' : 'post_test_id';

        $transformedData = [];

        foreach ($data as $key => $value) {
            if ($key === '_token') {
                continue;
            }

            // periksa tipe soal apakah pilihan aganda atau isian

            $transformedData[] = [
                'class_room_id' => $class,
                'session_id' => $session,
                $test_type => $test_type_id,
                'question_id' => (int)$key,
                'answer_id' => (int)$value,
            ];
        }

        return [$transformedData, $user_id, $class, $session, $test];
    }
}

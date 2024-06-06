<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Answer;
use App\Models\Category;
use App\Models\ClassRoom;
use App\Models\Question;
use App\Models\Session;
use App\Models\Test;
use App\Models\TestResult;
use Arr;
use Carbon\Carbon;
use DB;
use Exception;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Auth;
use Ramsey\Uuid\Uuid;

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

    public function testId(ClassRoom $class, Session $session)
    {
        if ($session->class_room_id != $class->id) {
            return abort(500);
        }
        $type = request('test', null);

        $relation = $type == 'pre' ? 'preTest' : 'postTest';

        $session->load([$relation => function ($query) {
            $query->with(['questions' => function ($query) {
                $query->whereHas('answers');
            }, 'questions.answers']);
        }]);

        $session->test = $session->$relation;
        $session->questions = $session->$relation->questions;

        return view('test', compact('class', 'session'));
    }

    public function storeTestId(Request $request, ClassRoom $class, Session $session, Test $test_type_id, $test_type)
    {
        DB::transaction(function () use ($request, $class, $session, $test_type_id, $test_type) {
            $user_id = Auth::id();
            $data = $request->all();
            unset($data['_token']);
            $preOrPostId = $test_type == 'pre' ? 'pre_test_id' : 'post_test_id';

            $createdAt = Carbon::now();
            $formattedCreatedAt = $createdAt->format('Y-m-d H:i:s');
            $test_id = Uuid::uuid4();

            $transformedData = [];
            foreach ($data as $key => $value) {
                $question = Question::query()
                    ->find((int)$key);

                if ($question->answer_type == 'selected') {
                    $answer_key = 'answer_id';
                    $answer = (int)$value;
                } else {
                    $answer_key = 'answer';
                    $answer = $value;
                }

                $form = [
                    'test_number' => $test_id,
                    'user_id' => (int)$user_id,
                    'class_room_id' => (int)$class->id,
                    'session_id' => (int)$session->id,
                    $preOrPostId => (int)$test_type_id->id,
                    'question_id' => (int)$key,
                    $answer_key => $answer,
                    'created_at' => $formattedCreatedAt
                ];

                $transformedData[] = $form;
            }

            TestResult::query()
                ->insert($transformedData);
        });
        return 'Berhasil simpan ujian';
    }
}

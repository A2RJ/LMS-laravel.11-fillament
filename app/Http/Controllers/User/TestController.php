<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\ClassRoom;
use App\Models\Question;
use App\Models\Session;
use App\Models\Test;
use App\Models\TestResult;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Uuid;

class TestController extends Controller
{
    public function test(ClassRoom $class, Session $session)
    {
        if ($session->class_room_id != $class->id) {
            return abort(500);
        }
        $type = request('test', null);

        $relation = $type == 'pre' ? 'preTest' : 'postTest';

        $session->load([
            $relation => function ($query) {
                $query->with([
                    'questions' => function ($query) {
                        $query->whereHas('answers');
                    },
                    'questions.answers'
                ]);
            }
        ]);

        $session->test = $session->$relation;
        $session->questions = $session->$relation->questions;

        return view('test', compact('class', 'session'));
    }

    public function storeTest(Request $request, ClassRoom $class, Session $session, Test $test_type_id, $test_type)
    {
        try {
            $test_number = DB::transaction(function () use ($request, $class, $session, $test_type_id, $test_type) {
                $user_id = Auth::id();
                $data = $request->all();
                unset($data['_token']);
                $preOrPostId = $test_type == 'pre' ? 'pre_test_id' : 'post_test_id';

                $createdAt = Carbon::now();
                $formattedCreatedAt = $createdAt->format('Y-m-d H:i:s');
                $test_number = Uuid::uuid4();

                $selectedData = [];
                $textData = [];

                foreach ($data as $key => $value) {
                    $question = Question::query()
                        ->find((int) $key);

                    $form = [
                        'test_number' => $test_number,
                        'user_id' => (int) $user_id,
                        'class_room_id' => (int) $class->id,
                        'session_id' => (int) $session->id,
                        $preOrPostId => (int) $test_type_id->id,
                        'question_id' => (int) $key,
                        'created_at' => $formattedCreatedAt,
                        'is_checked' => false
                    ];

                    if ($question->answer_type == 'selected') {
                        $form['answer_id'] = (int) $value;
                        $selectedData[] = $form;
                    } else {
                        $form['answer'] = $value;
                        $textData[] = $form;
                    }
                }

                if (!empty($selectedData)) {
                    TestResult::query()
                        ->insert($selectedData);
                }

                if (!empty($textData)) {
                    TestResult::query()
                        ->insert($textData);
                }

                return $test_number;
            });
            return redirect()->route('test.result', ['result' => $test_number]);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function result($result)
    {
        $tests = TestResult::query()
            ->where('test_number', $result)
            ->with([
                'user',
                'classRoom',
                'session',
                'preTest',
                'postTest',
                'question' => function (BelongsTo $query) {
                    $query->with('answers');
                },
                'answered'
            ])
            ->get();
        $class = $tests->first();

        $answered_correctly = $tests->filter(fn($item) => $item->answered)->filter(fn($item) => $item->answered->is_true)->count();

        return view('result', compact('class', 'tests', 'answered_correctly'));
    }

    public function postResult($test_number)
    {
        if (empty($test_number)) {
            return back()->with('error', 'Invalid test number.');
        }

        try {
            $updatedRows = TestResult::query()
                ->where('test_number', $test_number)
                ->update([
                    'is_checked' => true
                ]);

            if ($updatedRows > 0) {
                return back()->with('success', 'You have finished checking this test');
            } else {
                return back()->with('error', 'No tests found with the provided test number.');
            }
        } catch (\Exception $e) {
            return back()->with('error', 'An error occurred while updating the test results.');
        }
    }
}

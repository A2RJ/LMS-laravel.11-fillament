<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Course;
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
    public function test(Course $course, Session $session)
    {
        if ($session->course_id != $course->id)
            return abort(500);
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
        unset($session->$relation);

        $duration = $session->test->duration;
        $testId = $session->test->id;
        $this->initializeTestSession($testId, $duration);

        $remainingTime = $this->calculateRemainingTime($testId, $duration);

        return view('test', compact('course', 'session', 'remainingTime'));
    }

    private function initializeTestSession($testId, $duration)
    {
        $startTimeKey = "test_start_time_$testId";
        $endTimeKey = "test_end_time_$testId";
        $currentTestIdKey = 'current_test_id';

        if ($testId != session($currentTestIdKey)) {
            session()->forget([$startTimeKey, $endTimeKey, $currentTestIdKey]);
            session([$currentTestIdKey => $testId]);
        }

        if (!session()->has($startTimeKey) || !session()->has($endTimeKey)) {
            $this->setTestTimes($startTimeKey, $endTimeKey, $duration);
        }
    }

    private function calculateRemainingTime($testId, $duration)
    {
        $startTimeKey = "test_start_time_$testId";
        $endTimeKey = "test_end_time_$testId";

        $startTime = session($startTimeKey);
        $endTime = session($endTimeKey);
        $now = now();

        if ($now->lt($endTime)) {
            return $endTime->diff($now)->format('%H:%I:%S');
        } else {
            // Reset the test time
            $this->setTestTimes($startTimeKey, $endTimeKey, $duration);
            $endTime = session($endTimeKey);

            return $endTime->diff(now())->format('%H:%I:%S');
        }
    }

    private function setTestTimes($startTimeKey, $endTimeKey, $duration)
    {
        $startTime = now();
        $hours = (int) substr($duration, 0, 2);
        $minutes = (int) substr($duration, 3, 2);
        $endTime = $startTime->copy()->addHours($hours)->addMinutes($minutes);
        session([$startTimeKey => $startTime, $endTimeKey => $endTime]);
    }

    public function saveToSession(Request $request)
    {
        $key = $request->input('key');
        $value = $request->input('value');
        session([$key => $value]);

        return response()->json(['message' => 'Data saved to session successfully!', $key => $value]);
    }

    public function storeTest(Request $request, Course $course, Session $session, Test $test_type_id, $test_type)
    {
        try {
            $test_number = DB::transaction(function () use ($request, $course, $session, $test_type_id, $test_type) {
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
                        'course_id' => (int) $course->id,
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
                'course',
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

    public function postReview($test_number)
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

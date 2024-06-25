<?php

namespace App\Filament\Resources\UserCourseResource\Pages;

use App\Filament\Resources\UserCourseResource;
use App\Models\Course;
use App\Models\UserCourse;
use Filament\Resources\Pages\Page;

class TestReview extends Page
{
    public $record, $report;
    protected static string $resource = UserCourseResource::class;

    protected static ?string $title = 'Review';

    public function getHeading(): string
    {
        return '';
    }

    public function mount(int | string $record): void
    {
        $this->record = Course::query()
            ->whereId($record)
            ->first();

        $data = collect([]);

        foreach ($this->record->userCourses as $userCourse) {
            $user = $userCourse->user;
            $courseData = [
                'user_id' => $user->id,
                'user' => $user->name,
                'course' => $userCourse->course,
                'session' => [],
                'total_score' => 0,
            ];

            foreach ($userCourse->course->sessions as $session) {
                $preTest = $session->preTest;
                $postTest = $session->postTest;
                $attendance = $session->attendances->where('user_id', $user->id)->toArray();

                $preTestResults = $preTest?->preTestResult
                    ? $preTest->preTestResult
                    ->where('user_id', $user->id)
                    ->where('course_id', $session->course_id)
                    ->where('session_id', $session->id)
                    ->toArray()
                    : false;
                $preTestTotalScore = $this->calculateTotalScore($preTestResults);

                $postTestResults = $postTest?->postTestResult
                    ? $postTest->postTestResult
                    ->where('user_id', $user->id)
                    ->where('course_id', $session->course_id)
                    ->where('session_id', $session->id)
                    ->toArray()
                    : false;
                $postTestTotalScore = $this->calculateTotalScore($postTestResults);

                $courseData['session'][] = [
                    'title' => $session->title,
                    'attendance' => count($attendance) > 0 ? true : false,
                    'pre_test' => $preTest->title ?? 'N/A',
                    'pre_test_result' => $preTestResults ? true : false, //attendance
                    'pre_test_total_score' => $preTestTotalScore,
                    'post_test' => $postTest->title ?? 'N/A',
                    'post_test_result' => $postTestResults ? true : false, //attendance
                    'post_test_total_score' => $postTestTotalScore,
                ];

                $courseData['total_score'] += $preTestTotalScore === 'N/A' ? 0 : $preTestTotalScore;
                $courseData['total_score'] += $postTestTotalScore === 'N/A' ? 0 : $postTestTotalScore;
            }

            $totalSessions = count($courseData['session']);
            $courseData['average_score'] = $totalSessions ? $courseData['total_score'] / $totalSessions : 0;
            $courseData['grade'] = $this->calculateGrade($courseData['average_score']);

            $data->push($courseData);
        }

        $this->report = $data;
    }

    private function calculateTotalScore($results)
    {
        if (is_array($results) && count($results) > 0) {
            $scoreSum = collect($results)->sum('score');
            $scoreCount = count($results);
            return (int) number_format($scoreSum / $scoreCount);
        } else {
            return 'N/A';
        }
    }

    private function calculateGrade($averageScore)
    {
        if ($averageScore >= 90) {
            return 'A';
        } elseif ($averageScore >= 80) {
            return 'B';
        } elseif ($averageScore >= 70) {
            return 'C';
        } elseif ($averageScore >= 60) {
            return 'D';
        } else {
            return 'F';
        }
    }

    protected static string $view = 'filament.resources.user-course-resource.pages.test-review';
}

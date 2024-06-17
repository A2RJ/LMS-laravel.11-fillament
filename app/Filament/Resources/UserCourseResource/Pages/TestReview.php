<?php

namespace App\Filament\Resources\UserCourseResource\Pages;

use App\Filament\Resources\UserCourseResource;
use App\Models\Course;
use Filament\Resources\Pages\Page;

class TestReview extends Page
{
    public $record;
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
    }

    protected static string $view = 'filament.resources.user-course-resource.pages.test-review';
}

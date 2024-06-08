<?php

namespace App\Filament\Resources\SessionResource\Pages;

use App\Filament\Resources\SessionResource;
use App\Models\TestResult;
use Filament\Resources\Pages\Page;
use Filament\Resources\Pages\Concerns\InteractsWithRecord;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CheckUserTest extends Page
{
    use InteractsWithRecord;

    public $session, $tests;

    protected static string $resource = SessionResource::class;

    protected static string $view = 'filament.resources.session-resource.pages.check-user-test';

    public function mount(int|string $record): void
    {
        $this->record = TestResult::query()
            ->where('test_number', $record)
            ->first();
        $this->session = $this->record;
        $this->tests = TestResult::query()
            ->where('test_number', $record)
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
    }
}

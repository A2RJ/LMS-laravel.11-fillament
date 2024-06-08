<?php

namespace App\Filament\Resources\SessionResource\Pages;

use App\Filament\Resources\SessionResource;
use App\Models\Test;
use Filament\Actions;
use Filament\Resources\Pages\Concerns\InteractsWithRecord;
use Filament\Resources\Pages\Page;
use Session;

class TestResultBySession extends Page
{
    use InteractsWithRecord;

    public $session, $pre_test, $post_test;

    protected static string $resource = SessionResource::class;

    protected static string $view = 'filament.resources.session-resource.pages.test-result';

    public function getHeading(): string
    {
        return 'Test Result';
    }

    public function mount(int|string $record): void
    {
        $this->record = $this->resolveRecord($record);
        $this->session = $this->record;

        $this->pre_test = collect($this->session->testResult)->filter(fn($item) => $item->pre_test_id);
        $this->post_test = collect($this->session->testResult)->filter(fn($item) => $item->post_test_id);
    }
}

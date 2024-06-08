<?php

namespace App\Filament\Resources\SessionResource\Pages;

use App\Filament\Resources\SessionResource;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Resources\Pages\Concerns\InteractsWithRecord;
use Filament\Resources\Pages\Page;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

class TestResultBySession extends Page implements HasForms
{
    use InteractsWithRecord, InteractsWithForms;

    public $session, $pre_test, $post_test, $score, $note;

    protected static string $resource = SessionResource::class;

    protected static string $view = 'filament.resources.session-resource.pages.test-result-by-session';

    public function getHeading(): string
    {
        return 'Test Result';
    }

    public function mount(int|string $record): void
    {
        $this->record = $this->resolveRecord($record);
        $this->session = $this->record;

        $this->pre_test = collect($this->session->testResult)
            ->filter(fn($item) => $item->pre_test_id)
            ->groupBy('test_number')
            ->map(fn($group) => $group->first());
        $this->post_test = collect($this->session->testResult)
            ->filter(fn($item) => $item->post_test_id)
            ->groupBy('test_number')
            ->map(fn($group) => $group->first());
    }

    protected function paginate(Collection $items, string $pageName, int $perPage = 10, array $options = [])
    {
        $page = request()->input($pageName, 1);
        $items = $items instanceof Collection ? $items : Collection::make($items);
        return new LengthAwarePaginator(
            $items->forPage($page, $perPage),
            $items->count(),
            $perPage,
            $page,
            ['path' => request()->url(), 'pageName' => $pageName] + $options
        );
    }

    public $site_name;

    protected $rules = [
        'site_name' => 'required'
    ];

    protected function getFormSchema(): array
    {
        return [
            TextInput::make('site_name'),
        ];
    }

    public function submit()
    {
        $this->validate();

        // SAVE THE SETTINGS HERE
        dd($this->site_name);
    }
}

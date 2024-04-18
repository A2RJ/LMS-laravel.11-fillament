<?php

namespace App\Filament\Resources\TestResource\Pages;

use App\Filament\Resources\TestResource;
use Filament\Resources\Pages\Concerns\InteractsWithRecord;
use Filament\Resources\Pages\Page;
use Filament\Actions;

class TestPage extends Page
{
    use InteractsWithRecord;
    protected static string $resource = TestResource::class;

    protected static string $view = 'filament.resources.test-resource.pages.test-page';

    public function getHeading(): string
    {
        return '';
    }

    public function mount(int | string $record): void
    {
        $this->record = $this->resolveRecord($record);
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }


    public function submit()
    {
        return redirect()->route('filament.admin.resources.class-rooms.index');
    }
}

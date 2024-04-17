<?php

namespace App\Filament\Resources\ClassRoomResource\Pages;

use App\Filament\Resources\ClassRoomResource;
use Filament\Resources\Pages\Concerns\InteractsWithRecord;
use Filament\Resources\Pages\Page;

class Lesson extends Page
{
    use InteractsWithRecord;

    public $lesson;
    protected static string $resource = ClassRoomResource::class;

    protected static string $view = 'filament.resources.class-room-resource.pages.lesson';

    public function getHeading(): string
    {
        return '';
    }

    public function mount(int | string $record): void
    {
        $this->record = $this->resolveRecord($record);
        $this->lesson = collect($this->record->sessions)->filter(fn ($session) => $session->id == request('lesson'))->first();
    }
}

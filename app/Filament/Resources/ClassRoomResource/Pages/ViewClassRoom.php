<?php

namespace App\Filament\Resources\ClassRoomResource\Pages;

use App\Filament\Resources\ClassRoomResource;
use App\Models\ClassRoom;
use Filament\Actions\Action;
use Filament\Resources\Pages\Concerns\InteractsWithRecord;
use Filament\Resources\Pages\Page;

class ViewClassRoom extends Page
{
    use InteractsWithRecord;
    protected static string $resource = ClassRoomResource::class;

    protected static string $view = 'filament.resources.class-room-resource.pages.view-class-room';
    protected static ?string $title = 'Detail';

    public function mount(int | string $record): void
    {
        $this->record = $this->resolveRecord($record);
    }

    public function getHeading(): string
    {
        // return '';
        return request('title') ?? 'Preview';
    }
    protected function getHeaderActions(): array
    {
        return [
            Action::make('edit')
                ->url(fn (ClassRoom $classRoom) => ClassRoomResource::getUrl('edit', ['record' => $classRoom->id]))
        ];
    }

    protected function mutateFormDataBeforeFill(array $data): array
    {
        $data['thumbnail'] = '/storage/' . $data['thumbnail'];
        $data['content'] = preg_replace("/(\.\.\/)+storage/", "/storage", $data['content']);
        return $data;
    }
}

<?php

namespace App\Filament\Resources\ClassRoomResource\Pages;

use App\Filament\Resources\ClassRoomResource;
use App\Models\ClassRoom;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Filament\Resources\Pages\ViewRecord;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;
use Filament\Actions\Action;

class ViewClassRoom extends ViewRecord
{
    protected static ?string $title = 'Detail';
    protected static string $resource = ClassRoomResource::class;
    protected static string $view = 'filament.pages.class-detail';

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

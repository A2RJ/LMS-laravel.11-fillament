<?php

namespace App\Filament\Resources\ClassRoomResource\Pages;

use App\Filament\Resources\ClassRoomResource;
use App\Models\ClassRoom;
use Filament\Actions;
use Filament\Actions\Action;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Database\Eloquent\Model;

class EditClassRoom extends EditRecord
{
    protected static ?string $title = 'Edit Class';

    protected static string $resource = ClassRoomResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Action::make('Preview')
                ->url(fn(ClassRoom $classRoom) => ClassRoomResource::getUrl('view', ['record' => $classRoom->id])),
            // Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }

    protected function mutateFormDataBeforeFill(array $data): array
    {
        $data['thumbnail'] = '/storage/' . $data['thumbnail'];
        $data['content'] = preg_replace_callback('/<iframe[^>]+>/', function ($matches) {
            if (strpos($matches[0], 'youtube') === false) {
                return str_replace('<iframe ', ' <iframe sandbox="" ', $matches[0]);
            } else {
                return $matches[0];
            }
        }, $data['content']);

        // Remove autoplay attribute from video tags
        $data['content'] = preg_replace_callback('/<video[^>]*\sautoplay[^>]*>/', function ($matches) {
            return str_replace('autoplay', '', $matches[0]);
        }, $data['content']);

        // Adjust the storage path
        $data['content'] = preg_replace_callback('/(["\'])((?:\.\.\/)+storage\/[^"\']+)/', function ($matches) {
            return $matches[1] . preg_replace('/^(?:\.\.\/)+/', '/', $matches[2]);
        }, $data['content']);
        return $data;
    }

    protected function handleRecordUpdate(Model $record, array $data): Model
    {
        $conditional = [];
        if (!$data['thumbnail']) {
            $conditional['thumbnail'] = $record->thumbnail;
        }
        $record->update(
            array_merge($data, $conditional)
        );

        return $record;
    }
}

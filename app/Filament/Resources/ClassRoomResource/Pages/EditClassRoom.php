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
                ->url(fn (ClassRoom $classRoom) => ClassRoomResource::getUrl('view', ['record' => $classRoom->id])),
            // Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }

    protected function mutateFormDataBeforeFill(array $data): array
    {
        $data['thumbnail'] = '/storage/' . $data['thumbnail'];
        $data['content'] = preg_replace("/(\.\.\/)+storage/", "/storage", $data['content']);
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

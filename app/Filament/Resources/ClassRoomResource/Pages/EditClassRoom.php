<?php

namespace App\Filament\Resources\ClassRoomResource\Pages;

use App\Filament\Resources\ClassRoomResource;
use App\Models\ClassRoom;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Database\Eloquent\Model;

class EditClassRoom extends EditRecord
{
    protected static string $resource = ClassRoomResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }

    protected function mutateFormDataBeforeFill(array $data): array
    {
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

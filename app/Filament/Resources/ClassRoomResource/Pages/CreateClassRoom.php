<?php

namespace App\Filament\Resources\ClassRoomResource\Pages;

use App\Filament\Resources\ClassRoomResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateClassRoom extends CreateRecord
{
    protected static ?string $title = 'Create Class';

    protected static string $resource = ClassRoomResource::class;
    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['user_id'] = auth()->id();
        $data['progress'] = 0;
        return $data;
    }
}

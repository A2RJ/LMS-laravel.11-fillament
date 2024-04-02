<?php

namespace App\Filament\Resources\MediaLibraryResource\Pages;

use App\Filament\Resources\MediaLibraryResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateMediaLibrary extends CreateRecord
{
    protected static string $resource = MediaLibraryResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['user_id'] = auth()->id();

        return $data;
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}

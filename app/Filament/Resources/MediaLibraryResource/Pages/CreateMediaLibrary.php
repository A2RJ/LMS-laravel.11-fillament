<?php

namespace App\Filament\Resources\MediaLibraryResource\Pages;

use App\Filament\Resources\MediaLibraryResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Log;

class CreateMediaLibrary extends CreateRecord
{
    protected static string $resource = MediaLibraryResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['user_id'] = auth()->id();
        if (request()->hasFile('attachment')) {
            $file = request()->file('attachment');
            $data['filename'] = $file->getClientOriginalName();
        }
        $data['filename'] = 'testdoeng';
        Log::info($data);
        return $data;
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}

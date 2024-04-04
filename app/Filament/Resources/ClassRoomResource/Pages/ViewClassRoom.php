<?php

namespace App\Filament\Resources\ClassRoomResource\Pages;

use App\Filament\Resources\ClassRoomResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Filament\Resources\Pages\ViewRecord;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;

class ViewClassRoom extends ViewRecord
{
    protected static ?string $title = 'Detail Class';
    protected static string $resource = ClassRoomResource::class;
    protected static string $view = 'filament.pages.class-card';

    protected function mutateFormDataBeforeFill(array $data): array
    {
        $data['thumbnail'] = '/storage/' . $data['thumbnail'];
        $data['content'] = preg_replace("/(\.\.\/)+storage/", "/storage", $data['content']);
        return $data;
    } 
}

<?php

namespace App\Filament\Resources\ClassRoomResource\Pages;

use App\Filament\Resources\ClassRoomResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewClassRoom extends ViewRecord
{
    protected static string $resource = ClassRoomResource::class;
    protected static string $view = 'filament.pages.class-card';


    protected function mutateFormDataBeforeFill(array $data): array
    {
        $data['thumbnail'] = '/storage/' . $data['thumbnail'];
        $data['content'] = preg_replace("/(\.\.\/)+storage/", "/storage", $data['content']);
        return $data;
    }
}

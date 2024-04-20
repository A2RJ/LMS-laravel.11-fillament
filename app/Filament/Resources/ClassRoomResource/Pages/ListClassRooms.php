<?php

namespace App\Filament\Resources\ClassRoomResource\Pages;

use App\Filament\Resources\ClassRoomResource;
use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\ListRecords;

class ListClassRooms extends ListRecords
{
    protected static ?string $title = 'Class List';

    protected static string $resource = ClassRoomResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->successNotification(
                    Notification::make()
                        ->success()
                        ->title('User registered')
                        ->body('The user has been created successfully.'),
                ),
        ];
    }
}

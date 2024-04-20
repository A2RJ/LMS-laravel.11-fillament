<?php

namespace App\Filament\Resources\ClassRoomResource\Pages;

use App\Filament\Resources\ClassRoomResource;
use App\Filament\Resources\ClassRoomResource\Widgets\CoursesChart;
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

    protected function getHeaderWidgets(): array
    {
        return [
            CoursesChart::class
        ];
    }
}

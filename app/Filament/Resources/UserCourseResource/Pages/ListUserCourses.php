<?php

namespace App\Filament\Resources\UserCourseResource\Pages;

use App\Filament\Resources\UserCourseResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;

class ListUserCourses extends ListRecords
{
    protected static string $resource = UserCourseResource::class;

    protected function getTableQuery(): Builder
    {
        return parent::getTableQuery()
            ->select('*', DB::raw('COUNT(user_id) as user_count'))->groupBy('course_id');
    }
}

<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserCourseResource\Pages;
use App\Filament\Resources\UserCourseResource\RelationManagers;
use App\Models\UserCourse;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class UserCourseResource extends Resource
{
    protected static ?string $model = UserCourse::class;

    protected static ?string $navigationLabel = 'Test Review';
    protected static ?string $pluralModelLabel = 'Test Review';
    protected static ?string $navigationGroup = 'Courses';
    protected static ?int $navigationSort = 5;

    protected static ?string $navigationIcon = 'heroicon-o-presentation-chart-line';

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('course.title')
                    ->sortable(),
                Tables\Columns\TextColumn::make('user_count')
                    ->label('Total User'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make()
                    ->url(fn (UserCourse $userCourse) => route('filament.admin.resources.user-courses.view', $userCourse->course_id)),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListUserCourses::route('/'),
            'view' => Pages\TestReview::route('/{record}')
        ];
    }
}

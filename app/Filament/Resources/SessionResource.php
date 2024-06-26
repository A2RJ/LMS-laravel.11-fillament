<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SessionResource\Pages;
use App\Forms\Components\TinyFileManager;
use App\Models\Course;
use App\Models\Session;
use App\Models\Test;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Resources\Pages\Page;

class SessionResource extends Resource
{
    protected static ?string $model = Session::class;

    protected static ?string $navigationGroup = 'Courses';
    protected static ?string $navigationLabel = 'Lessons';
    protected static ?string $pluralModelLabel = 'Lesson';


    protected static ?string $navigationIcon = 'heroicon-o-calendar-days';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make()
                    ->schema([
                        Forms\Components\Select::make('course_id')
                            ->label('Class')
                            ->searchPrompt('Search course by title')
                            ->options(Course::query()->pluck('title', 'id')->toArray())
                            // ->options(Course::query()->where('user_id', auth()->id())->pluck('id', 'title'))
                            // ->formatStateUsing(fn(?string $state) => substr($state, 0, 20))
                            ->required()
                            ->searchable()
                            ->optionsLimit(20),
                        Forms\Components\TextInput::make('title')
                            ->required()
                            ->columnSpanFull()
                            ->maxLength(255),
                        TinyFileManager::make('content')
                            ->required()
                            ->columnSpanFull(),
                        Forms\Components\DatePicker::make('start')
                            ->required(),
                        Forms\Components\DatePicker::make('end')
                            ->required(),
                        Forms\Components\Select::make('pre_test_id')
                            ->nullable()
                            ->label('Pre Test')
                            ->searchPrompt('Search test by title')
                            ->options(Test::query()->pluck('title', 'id'))
                            // ->options(Test::query()->where('user_id', auth()->id())->pluck('title', 'id'))
                            ->formatStateUsing(fn(?string $state) => substr($state, 0, 20))
                            ->searchable()
                            ->optionsLimit(20),
                        Forms\Components\Select::make('post_test_id')
                            ->nullable()
                            ->label('Pre Test')
                            ->searchPrompt('Search test by title')
                            ->options(Test::query()->pluck('title', 'id'))
                            // ->options(Test::query()->where('user_id', auth()->id())->pluck('title', 'id'))
                            ->formatStateUsing(fn(?string $state) => substr($state, 0, 20))
                            ->searchable()
                            ->optionsLimit(20)
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('course.title')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('preTest.title')
                    ->searchable()
                    ->sortable()
                    ->toggleable(),
                Tables\Columns\TextColumn::make('postTest.title')
                    ->searchable()
                    ->sortable()
                    ->toggleable(),
                Tables\Columns\TextColumn::make('start')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(),
                Tables\Columns\TextColumn::make('end')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(),
                Tables\Columns\TextColumn::make('deleted_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListSessions::route('/'),
            'create' => Pages\CreateSession::route('/create'),
            'edit' => Pages\EditSession::route('/{record}/edit'),
            'view' => Pages\ViewSession::route('/{record}'),
            'check.user.test' => Pages\CheckUserTest::route('/{record}/check'),
            'session.result' => Pages\TestResultBySession::route('/test/{record}/result')
        ];
    }

    // public static function getRecordSubNavigation(Page $page): array
    // {
    //     return $page->generateNavigationItems([
    //         Pages\TestResult::class,
    //     ]);
    // }
}

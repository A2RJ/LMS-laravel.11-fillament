<?php

namespace App\Filament\Resources\ClassRoomResource\RelationManagers;

use App\Filament\Resources\SessionResource;
use App\Forms\Components\TinyFileManager;
use App\Models\Session;
use App\Models\Test;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;

class SessionsRelationManager extends RelationManager
{

    protected static ?string $title = 'Sessions';
    protected static string $relationship = 'sessions';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
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
                    ->options(Test::query()->where('user_id', auth()->id())->pluck('title', 'id'))
                    ->formatStateUsing(fn (?string $state) => substr($state, 0, 20))
                    ->searchable()
                    ->optionsLimit(20),
                Forms\Components\Select::make('post_test_id')
                    ->nullable()
                    ->label('Pre Test')
                    ->searchPrompt('Search test by title')
                    ->options(Test::query()->where('user_id', auth()->id())->pluck('title', 'id'))
                    ->formatStateUsing(fn (?string $state) => substr($state, 0, 20))
                    ->searchable()
                    ->optionsLimit(20),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('title')
            ->columns([
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('preTest')
                    ->formatStateUsing(fn (string $state) => $state ? 'Preview Test' : 'No Test')
                    ->badge()
                    ->color('primary'),
                Tables\Columns\TextColumn::make('postTest')
                    ->formatStateUsing(fn (string $state) => $state ? 'Preview Test' : 'No Test')
                    ->badge()
                    ->color('primary'),
                Tables\Columns\TextColumn::make('start')->dateTime(),
                Tables\Columns\TextColumn::make('end')->dateTime(),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\Action::make('test')
                    ->label('Test Review')
                    ->icon('heroicon-o-academic-cap')
                    ->url(function (Session $session) {
                        return route('filament.admin.resources.sessions.session.result', $session->id);
                    }, true),
                Tables\Actions\ViewAction::make()
                    ->url(function (Session $session) {
                        $sessions = Session::where('course_id', $session->course_id)->get();
                        $currentIndex = $sessions->search(function ($item) use ($session) {
                            return $item->id === $session->id;
                        });
                        return route('session.id', ['course' => $session->course_id]) . "?page=" . $currentIndex + 1;
                    }, true),
                Tables\Actions\EditAction::make()
                    ->url(fn (Session $session) => route('filament.admin.resources.sessions.edit', ['record' => $session->id])),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}

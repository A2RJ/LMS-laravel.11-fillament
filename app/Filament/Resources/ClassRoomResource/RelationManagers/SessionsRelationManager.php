<?php

namespace App\Filament\Resources\ClassRoomResource\RelationManagers;

use App\Models\Test;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;

class SessionsRelationManager extends RelationManager
{
    protected static string $relationship = 'sessions';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->columnSpanFull()
                    ->maxLength(255),
                TinyEditor::make('content')
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
                    ->formatStateUsing(fn (string $state) => $state ? 'Open Link' : 'No Test'),
                Tables\Columns\TextColumn::make('postTest')
                    ->formatStateUsing(fn (string $state) => $state ? 'Open Link' : 'No Test'),
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
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}

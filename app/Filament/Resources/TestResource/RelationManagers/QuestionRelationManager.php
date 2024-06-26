<?php

namespace App\Filament\Resources\TestResource\RelationManagers;

use App\Filament\Resources\QuestionResource;
use App\Filament\Resources\TestResource;
use App\Forms\Components\TinyFileManager;
use App\Models\Question;
use Filament\Forms;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;

class QuestionRelationManager extends RelationManager
{
    protected static string $relationship = 'questions';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                TinyFileManager::make('question')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\Select::make('answer_type')
                    ->options([
                        'description' => 'Description',
                        'selected' => 'Choice',
                    ])
                    ->required()
                    ->live()
                    ->columnSpanFull(),
                // Repeater::make('Answers')
                //     ->columnSpanFull()
                //     ->relationship('answers')
                //     ->visible(fn (Get $get): bool => $get('answer_type') === 'selected')
                //     ->schema([
                //         TinyFileManager::make('answer')
                //             ->required()
                //             ->columnSpanFull(),
                //         Forms\Components\Grid::make([
                //             'default' => 2,
                //         ])
                //             ->schema([
                //                 Forms\Components\Select::make('is_true')
                //                     ->label('Is Correct')
                //                     ->required()
                //                     ->options([
                //                         'true' => 'True',
                //                         'false' => 'False',
                //                     ]),
                //                 Forms\Components\TextInput::make('score')
                //                     ->numeric()
                //                     ->label('Score')
                //                     ->nullable()
                //                     ->default(0),
                //             ])
                //             ->columnSpanFull()
                //             ->mutateRelationshipDataBeforeSaveUsing(function (array $data): array {
                //                 return $data;
                //             })
                //     ])
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('question')
            ->columns([
                Tables\Columns\TextColumn::make('question')
                    ->searchable()
                    ->html()
                    ->wrap()
                    ->lineClamp(1),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make()
                    ->url(fn($livewire) => QuestionResource::getUrl('create', ['ownerRecord' => $livewire->ownerRecord->getKey()]), true)
                    ->successRedirectUrl(fn($livewire) => TestResource::getUrl('edit', ['record' => $livewire->ownerRecord->getKey()])),
            ])
            ->actions([
                Tables\Actions\ViewAction::make()
                    ->url(fn(Question $question) => QuestionResource::getUrl('view', ['record' => $question->id]), true),
                Tables\Actions\EditAction::make()
                    ->url(fn(Question $question) => QuestionResource::getUrl('edit', ['record' => $question->id]), true)
                    ->successRedirectUrl(fn($livewire) => TestResource::getUrl('edit', ['record' => $livewire->ownerRecord->getKey()])),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}

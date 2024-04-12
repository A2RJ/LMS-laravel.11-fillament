<?php

namespace App\Filament\Resources\TestResource\RelationManagers;

use App\Filament\Resources\QuestionRelationManagerResource\RelationManagers\AnswersRelationManager;
use App\Filament\Resources\TestResource;
use Filament\Forms;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;

class QuestionRelationManager extends RelationManager
{
    protected static string $relationship = 'question';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                TinyEditor::make('question')
                    ->required()
                    ->columnSpanFull()
                    ->fileAttachmentsDisk('local')
                    ->fileAttachmentsVisibility('public')
                    ->fileAttachmentsDirectory('public'),
                Forms\Components\Select::make('answer_type')
                    ->options([
                        'description' => 'Description',
                        'selected' => 'Choice',
                    ])
                    ->required()
                    ->live()
                    ->columnSpanFull(),
                Repeater::make('Answers')
                    ->columnSpanFull()
                    ->relationship('answers')
                    ->visible(fn (Get $get): bool => $get('answer_type') === 'selected')
                    ->schema([
                        TinyEditor::make('answer')
                            ->required()
                            ->columnSpanFull()
                            ->fileAttachmentsDisk('local')
                            ->fileAttachmentsVisibility('public')
                            ->fileAttachmentsDirectory('public'),
                        Forms\Components\Grid::make([
                            'default' => 2,
                        ])
                            ->schema([
                                Forms\Components\Select::make('is_true')
                                    ->label('Is Correct')
                                    ->required()
                                    ->options([
                                        'true' => 'True',
                                        'false' => 'False',
                                    ]),
                                Forms\Components\TextInput::make('score')
                                    ->numeric()
                                    ->label('Score')
                                    ->nullable()
                                    ->default(0),
                            ])
                            ->columnSpanFull()
                            ->mutateRelationshipDataBeforeSaveUsing(function (array $data): array {
                                return $data;
                            })
                    ])
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('question')
            ->columns([
                Tables\Columns\TextColumn::make('question'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make()
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

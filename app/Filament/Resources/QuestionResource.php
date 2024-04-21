<?php

namespace App\Filament\Resources;

use App\Filament\Resources\QuestionResource\Pages;
use App\Filament\Resources\QuestionResource\RelationManagers\AnswerRelationManager;
use App\Forms\Components\TinyFileManager;
use App\Models\Question;
use Filament\Forms;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class QuestionResource extends Resource
{
    protected static ?string $model = Question::class;

    protected static bool $shouldRegisterNavigation = false;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make()
                    ->schema([
                        Forms\Components\Hidden::make('test_id')
                            ->default(request()->query('ownerRecord')),
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
                        Forms\Components\Repeater::make('Answers')
                            ->columnSpanFull()
                            ->relationship('answers')
                            ->live()
                            ->visible(fn (Forms\Get $get): bool => $get('answer_type') === 'selected')
                            ->schema([
                                RichEditor::make('answer')
                                    ->required()
                                    ->columnSpanFull(),
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
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('answer_type')
                    ->searchable(),
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
                Tables\Actions\EditAction::make(),
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
            // AnswerRelationManager::class
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListQuestions::route('/'),
            'create' => Pages\CreateQuestion::route('/create'),
            'edit' => Pages\EditQuestion::route('/{record}/edit'),
            'view' => Pages\ViewQuestion::route('/{record}'),
        ];
    }
}

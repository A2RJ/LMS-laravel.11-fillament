<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TestResource\Pages;
use App\Filament\Resources\TestResource\RelationManagers;
use App\Filament\Resources\TestResource\RelationManagers\QuestionRelationManager;
use App\Forms\Components\TinyFileManager;
use App\Models\Test;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Infolists;
use Filament\Infolists\Infolist;

class TestResource extends Resource
{
    protected static ?string $model = Test::class;
    protected static ?string $navigationGroup = 'Courses';
    protected static ?string $navigationLabel = 'Quizzes';
    protected static ?string $pluralModelLabel = 'Quiz';

    protected static ?string $navigationIcon = 'heroicon-o-question-mark-circle';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make()
                    ->schema([
                        Forms\Components\TextArea::make('title')
                            ->label('Quiz Name')
                            ->required()
                            ->columnSpanFull(),
                        Forms\Components\Select::make('duration')
                            ->options(self::generateTimeRangeOptions())
                            ->searchable()
                            ->columnSpanFull(),
                        TinyFileManager::make('content')
                            ->label('Description')
                            ->columnSpanFull(),
                    ])->columns()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->label('Quiz Name')
                    ->searchable()
                    ->wrap()
                    ->lineClamp(1),
                Tables\Columns\TextColumn::make('duration')
                    ->formatStateUsing(fn (string $state) => self::formatTime($state))
                    ->sortable(),
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
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\ForceDeleteBulkAction::make(),
                    Tables\Actions\RestoreBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            QuestionRelationManager::class
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTests::route('/'),
            'create' => Pages\CreateTest::route('/create'),
            'edit' => Pages\EditTest::route('/{record}/edit'),
            'view' => Pages\TestPage::route('/{record}'),
            // 'test-page' => Pages\TestPage::route('/{record}/test')
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }

    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                Infolists\Components\TextEntry::make('title')
                    ->label('')
                    ->columnSpanFull(),
                Infolists\Components\TextEntry::make('content')
                    ->label('')
                    ->html()
                    ->columnSpanFull(),
                Infolists\Components\TextEntry::make('duration'),
            ]);
    }

    public static function generateTimeRangeOptions()
    {
        $options = [];
        $start = strtotime('00:30');
        $end = strtotime('24:00');

        while ($start <= $end) {
            $time = date('H:i', $start);
            $hours = date('H', $start);
            $minutes = date('i', $start);
            $options[$time] = "$hours Hour $minutes Minutes";
            $start = strtotime('+30 minutes', $start);
        }

        $options['24:00'] = '24 Hour 00 Minutes';
        $filteredOptions = array_filter($options, function ($value) {
            return $value !== '00 Hour 00 Minutes';
        });

        return $filteredOptions;
    }

    public static function formatTime($timeString)
    {
        $timeParts = explode(':', $timeString);

        if (count($timeParts) == 2) {
            $hours = intval($timeParts[0]);
            $minutes = intval($timeParts[1]);
            return "$hours Hour $minutes Minutes";
        } else {
            return "Format waktu tidak valid";
        }
    }
}

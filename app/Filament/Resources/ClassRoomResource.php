<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ClassRoomResource\Pages;
use App\Filament\Resources\ClassRoomResource\RelationManagers\SessionsRelationManager;
use App\Infolists\Components\TinyDisplay;
use App\Models\ClassRoom;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\HtmlString;
use Filament\Infolists;
use Filament\Infolists\Infolist;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;

class ClassRoomResource extends Resource
{
    // protected static ?string $navigationLabel = 'Class';
    // protected static ?string $pluralModelLabel = 'Class';
    protected static ?string $model = ClassRoom::class;

    protected static ?string $navigationGroup = 'Courses';
    // protected static ?string $navigationIcon = 'heroicon-o-building-office-2';
    protected static ?string $navigationIcon = 'heroicon-o-academic-cap';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()->schema([
                    TextInput::make('title')
                        ->label('Class Name')
                        ->required()
                        ->columnSpanFull(),
                    FileUpload::make('thumbnail')
                        ->hiddenOn('edit')
                        ->required()
                        ->image()
                        ->imageCropAspectRatio('16:9')
                        ->columnSpanFull(),
                    FileUpload::make('thumbnail')
                        ->hiddenOn('create')
                        ->nullable()
                        ->image()
                        ->imageCropAspectRatio('1:1')
                        ->imagePreviewHeight('200px')
                        ->columnSpanFull(),
                    TinyEditor::make('content')
                        ->required()
                        ->columnSpanFull()
                        ->fileAttachmentsDisk('local')
                        ->fileAttachmentsVisibility('public')
                        ->fileAttachmentsDirectory('public')
                        ->visible()
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->label('Class Name')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('thumbnail')
                    ->sortable()
                    ->toggleable()
                    ->formatStateUsing(function (string $state): HtmlString {
                        return new HtmlString("<img src='/storage/$state' alt='media' style='max-height: 100px; max-width: 100px;' width='auto' height='200'>");
                    }),
                TextColumn::make('deleted_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
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
            SessionsRelationManager::class
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListClassRooms::route('/'),
            'create' => Pages\CreateClassRoom::route('/create'),
            'edit' => Pages\EditClassRoom::route('/{record}/edit'),
            'view' => Pages\ViewClassRoom::route('/{record}')
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
                TinyDisplay::make('content')
                    ->hiddenLabel()
                    ->columnSpanFull()
            ]);
    }
}

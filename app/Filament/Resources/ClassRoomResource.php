<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ClassRoomResource\Pages;
use App\Models\ClassRoom;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\HtmlString;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;
use Filament\Infolists;
use Filament\Infolists\Infolist;
use Filament\Pages\Page;

class ClassRoomResource extends Resource
{
    protected static ?string $model = ClassRoom::class;

    protected static ?string $navigationGroup = 'Course';
    protected static ?string $navigationIcon = 'heroicon-o-building-library';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->required()
                    ->columnSpanFull(),
                FileUpload::make('thumbnail')
                    ->required()
                    ->image()
                    ->imageCropAspectRatio('16:9')
                    ->imagePreviewHeight('200px')
                    ->columnSpanFull()
                    ->hiddenOn('edit'),
                FileUpload::make('thumbnail')
                    ->nullable()
                    ->image()
                    ->imageCropAspectRatio('16:9')
                    ->imagePreviewHeight('200px')
                    ->columnSpanFull()
                    ->hiddenOn('create'),
                TinyEditor::make('content')
                    ->required()
                    ->columnSpanFull()
                    ->fileAttachmentsDisk('local')
                    ->fileAttachmentsVisibility('public')
                    ->fileAttachmentsDirectory('public')
                    ->visible(),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->searchable(),
                TextColumn::make('thumbnail')
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
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
                Tables\Actions\ViewAction::make(),
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
            //
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
                Infolists\Components\TextEntry::make('thumbnail')
                    ->label('')
                    ->alignCenter()
                    ->columnSpanFull()
                    ->formatStateUsing(function (string $state): HtmlString {
                        return new HtmlString("<img src='/storage/$state' alt='media' >");
                    }),
                Infolists\Components\TextEntry::make('title')
                    ->columnSpanFull(),
                Infolists\Components\TextEntry::make('content'),
            ]);
    }
}

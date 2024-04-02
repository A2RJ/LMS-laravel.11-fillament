<?php

namespace App\Filament\Resources;

use App\Models\User;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;
use Miguilim\FilamentAutoPanel\AutoResource;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;

class UserResource extends AutoResource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static array $enumDictionary = [];

    protected static array $visibleColumns = ['name', 'email', 'email_verified_at', 'created_at', 'updated_at'];

    protected static array $searchableColumns = [];

    public static function getFilters(): array
    {
        return [
            //
        ];
    }

    public static function getActions(): array
    {
        return [
            //
        ];
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getHeaderWidgets(): array
    {
        return [
            'list' => [
                //
            ],
            'view' => [
                //
            ],
        ];
    }

    public static function getFooterWidgets(): array
    {
        return [
            'list' => [
                //
            ],
            'view' => [
                //
            ],
        ];
    }

    public static function getColumnsOverwrite(): array
    {
        return [
            'table' => [
                TextColumn::make('name')->html()
            ],
            'form' => [
                // TextInput::make('name')->required(),
                TextInput::make('email')->required()->email(),
                TextInput::make('password')->required(),
                TinyEditor::make('name')->fileAttachmentsDisk('local')->fileAttachmentsVisibility('public')->fileAttachmentsDirectory('public'),
            ],
            'infolist' => [
                //
            ],
        ];
    }

    public static function getExtraPages(): array
    {
        return [
            //
        ];
    }
}

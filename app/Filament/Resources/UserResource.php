<?php

namespace App\Filament\Resources;

use App\Models\User;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;
use Miguilim\FilamentAutoPanel\AutoResource;

class UserResource extends AutoResource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationGroup = 'Settings';

    protected static ?string $navigationIcon = 'heroicon-o-users';

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
        return [];
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
            'view' => [],
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
                TextColumn::make('name')->wrap()->copyable()->html(),
                TextColumn::make('email')->copyable()
                    ->copyMessage('Email copied'),
            ],
            'form' => [
                TextInput::make('id')->hidden(),
                TextInput::make('remember_token')->hidden(),
                TextInput::make('name')->required(),
                TextInput::make('email')->required()->email(),
                TextInput::make('password')->required(),
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

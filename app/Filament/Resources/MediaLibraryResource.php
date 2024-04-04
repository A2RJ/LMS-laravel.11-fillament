<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MediaLibraryResource\Pages;
use App\Models\MediaLibrary;
use BladeUI\Icons\Components\Icon;
use Filament\Actions\CreateAction;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\Layout\Grid;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Support\HtmlString;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use Ramsey\Uuid\Uuid;

class MediaLibraryResource extends Resource
{
    protected static ?string $model = MediaLibrary::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('attachment')->getUploadedFileNameForStorageUsing(
                    fn(TemporaryUploadedFile $file): string => (string) str($file->getClientOriginalName())
                        ->prepend(Uuid::uuid4() . '--'),
                )
                    ->required()
                    ->live()
                    ->loadingIndicatorPosition('left')
                    ->panelLayout('integrated')
                    ->removeUploadedFileButtonPosition('right')
                    ->uploadButtonPosition('left')
                    ->uploadProgressIndicatorPosition('left')
                    ->columnSpanFull()
                    ->maxSize(102400)
                    ->hiddenOn('edit'),
                TextInput::make('filename')
                    ->required()
                    ->columnSpanFull()
                    ->hiddenOn('create')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('filename')
                    ->formatStateUsing(function (string $state, MediaLibrary $mediaLibrary): string {
                        return $state == 0 ? substr($mediaLibrary->attachment, strpos($mediaLibrary->attachment, '--') + 2) : $state;
                    })
                    ->copyable()
                    ->copyableState(fn(string $state, MediaLibrary $mediaLibrary): string => '/storage/' . $mediaLibrary->attachment)
                    ->searchable(),
                TextColumn::make('attachment')
                    ->formatStateUsing(function (string $state): HtmlString {
                        $extension = pathinfo($state, PATHINFO_EXTENSION);
                        if (in_array($extension, ['jpg', 'jpeg', 'png', 'gif'])) {
                            return new HtmlString("<img src='/storage/$state' alt='media' style='max-height: 100px; max-width: 100px;' width='auto' height='200'>");
                        } elseif (in_array($extension, ['mp4', 'avi', 'mov'])) {
                            return new HtmlString("<video  width='400' controls='controls' preload='metadata'><source src='/storage/$state' type='video/mp4'></video>");
                        } else {
                            return new HtmlString("<p>No preview available</p>");
                        }
                    }),
            ])
            // ->contentGrid([
            //     'default' => 1,
            //     'sm' => 3,
            //     'xl' => 4,
            // ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\Action::make('attachment')
                    ->label('Preview')
                    ->icon('heroicon-m-information-circle')
                    ->url(function (MediaLibrary $mediaLibrary): string {
                        return '/storage/' . $mediaLibrary->attachment;
                    })
                    ->openUrlInNewTab(),
                // ->action(function (MediaLibrary $mediaLibrary) {
                //     return redirect('/storage/' . $mediaLibrary->attachment);
                // })
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMediaLibraries::route('/'),
            'create' => Pages\CreateMediaLibrary::route('/create'),
            // 'edit' => Pages\EditMediaLibrary::route('/{record}/edit'),
        ];
    }
}

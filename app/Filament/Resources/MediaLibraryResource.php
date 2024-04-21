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
use Filament\Support\Enums\FontWeight;
use Filament\Tables;
use Filament\Tables\Columns\Layout\Grid;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Support\HtmlString;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use Ramsey\Uuid\Uuid;
use Webbingbrasil\FilamentCopyActions\Tables\Actions\CopyAction;

class MediaLibraryResource extends Resource
{
    protected static ?string $model = MediaLibrary::class;

    protected static ?string $navigationGroup = 'Courses';

    protected static ?int $navigationSort = 1;

    protected static ?string $navigationIcon = 'heroicon-o-paper-clip';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('attachment')->getUploadedFileNameForStorageUsing(
                    fn (TemporaryUploadedFile $file): string => (string) str($file->getClientOriginalName())
                        ->prepend(Uuid::uuid4() . '--'),
                )
                    ->required()
                    ->live()
                    ->columnSpanFull()
                    ->maxSize(10 * 1024)
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
                Tables\Columns\Layout\Stack::make([
                    TextColumn::make('attachment')
                        ->formatStateUsing(function (string $state): HtmlString {
                            $extension = pathinfo($state, PATHINFO_EXTENSION);
                            if (in_array($extension, ['jpg', 'jpeg', 'png', 'gif'])) {
                                return new HtmlString("<img src='/storage/$state' alt='media' style='max-height: 150px; max-width: 150px;' width='auto' height='200'>");
                            } elseif (in_array($extension, ['mp4', 'avi', 'mov'])) {
                                return new HtmlString("<video  width='400' controls='controls' preload='metadata'><source src='/storage/$state' type='video/mp4'></video>");
                            } else {
                                return new HtmlString("<p class='p-10'>No preview available</p>");
                            }
                        })->alignCenter(),
                    TextColumn::make('filename')
                        ->formatStateUsing(function (string $state, MediaLibrary $mediaLibrary): string {
                            return $state == 0 ? substr($mediaLibrary->attachment, strpos($mediaLibrary->attachment, '--') + 2) : $state;
                        })
                        ->copyable()
                        ->copyableState(fn (string $state, MediaLibrary $mediaLibrary): string => '/storage/' . $mediaLibrary->attachment)
                        ->searchable()
                        ->color('gray')
                        ->limit(30),
                ])->space(3),
            ])
            ->filters([
                //
            ])
            ->contentGrid([
                'md' => 2,
                'xl' => 3,
            ])
            ->paginated([
                18,
                36,
                72,
                'all',
            ])
            ->filters([
                //
            ])
            ->actions([
                CopyAction::make()->copyable(fn ($record) => $record->filename == 0 ? '/storage/' . $record->attachment : $record->filename),
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

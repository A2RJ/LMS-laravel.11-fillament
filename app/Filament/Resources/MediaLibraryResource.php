<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MediaLibraryResource\Pages;
use App\Filament\Resources\MediaLibraryResource\RelationManagers;
use App\Models\MediaLibrary;
use Filament\Actions\Action;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Split;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\Layout\Grid;
use Filament\Tables\Columns\Layout\Panel;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\HtmlString;

class MediaLibraryResource extends Resource
{
    protected static ?string $model = MediaLibrary::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('filename')
                    ->label('File')
                    ->required()
                    ->live()
                    ->imagePreviewHeight('250')
                    ->loadingIndicatorPosition('left')
                    ->panelAspectRatio('2:1')
                    ->panelLayout('integrated')
                    ->removeUploadedFileButtonPosition('right')
                    ->uploadButtonPosition('left')
                    ->uploadProgressIndicatorPosition('left')
                    ->columnSpanFull()
                    ->maxSize(102400)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Grid::make('filename')
                    ->schema([
                        TextColumn::make('filename')
                            ->label('File')
                            ->formatStateUsing(function (string $state): HtmlString {
                                // Mendapatkan ekstensi file
                                $extension = pathinfo($state, PATHINFO_EXTENSION);

                                // Jika ekstensi adalah gambar, tampilkan dengan tag img
                                if (in_array($extension, ['jpg', 'jpeg', 'png', 'gif'])) {
                                    return new HtmlString("<img src='/storage/$state' alt='media' style='max-height: 200px;' width='auto' height='200'>");
                                } elseif (in_array($extension, ['mp4', 'avi', 'mov'])) {
                                    // Jika ekstensi adalah video, tampilkan dengan tag video
                                    return new HtmlString("<video controls><source src='/storage/$state' type='video/mp4'></video>");
                                } elseif (in_array($extension, ['xlsx', 'xls'])) {
                                    // Jika ekstensi adalah Excel, tampilkan teks Excel
                                    // Anda perlu mengonversi file Excel ke teks terlebih dahulu
                                    $text = "Text from Excel";
                                    return new HtmlString("<p style='font-family: Arial;'>$text</p>");
                                } elseif (in_array($extension, ['doc', 'docx'])) {
                                    // Jika ekstensi adalah Word, tampilkan teks Word
                                    // Anda perlu mengonversi file Word ke teks terlebih dahulu
                                    $text = "Text from Word";
                                    return new HtmlString("<p style='font-family: Arial;'>$text</p>");
                                } elseif ($extension === 'pdf') {
                                    // Jika ekstensi adalah PDF, tampilkan teks PDF
                                    // Anda perlu mengonversi PDF menjadi teks
                                    $text = "Text from PDF";
                                    return new HtmlString("<p style='font-family: Arial;'>$text</p>");
                                } else {
                                    // Jika bukan tipe yang dikenali, tampilkan pesan default
                                    return new HtmlString("<p>No preview available</p>");
                                }
                            })
                            ->description(function (MediaLibrary $record): string {
                                return $record->filename;
                            })
                            ->copyable()
                    ])
            ])
            ->contentGrid([
                'md' => 2,
                'xl' => 3,
            ])
            ->filters([
                //
            ])
            ->actions([
                // Tables\Actions\EditAction::make()->disabledForm(),
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

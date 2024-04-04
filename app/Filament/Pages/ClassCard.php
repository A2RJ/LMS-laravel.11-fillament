<?php

namespace App\Filament\Pages;

use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Infolists\Components\TextEntry;
use Filament\Pages\Page;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;

class ClassCard extends Page implements HasForms
{

    use InteractsWithForms;
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.class-card';


    public function mount(): void
    {
        $this->form->fill();
    }

    public function form(Form $form): Form
    {
        return $form->schema([
            // TinyEditor::make('content')
            //     ->required()
            //     ->columnSpanFull()
            //     ->fileAttachmentsDisk('local')
            //     ->fileAttachmentsVisibility('public')
            //     ->fileAttachmentsDirectory('public')
            //     ->visible()

        ]);
    }
}

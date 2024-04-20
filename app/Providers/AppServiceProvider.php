<?php

namespace App\Providers;

use Filament\Support\Assets\Css;
use Filament\Support\Facades\FilamentAsset;
use Illuminate\Support\ServiceProvider;
use Filament\Support\Assets\Js;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        FilamentAsset::register([
            // Js::make('tiny', 'https://cdn.jsdelivr.net/npm/tinymce@5.10.7/tinymce.min.js'),
            // Js::make('tiny', __DIR__ .  '/../../public/tiny6/tinymce/tinymce.min.js'),
            // Js::make('tiny-file-mngr', __DIR__ . '/../../public/js/mohamedsabil83/filament-forms-tinyeditor/tiny-editor.js')
        ]);
    }
}

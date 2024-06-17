<?php

namespace App\Providers;

use Filament\Support\Assets\Css;
use Filament\Support\Facades\FilamentAsset;
use Illuminate\Support\ServiceProvider;
use Filament\Support\Assets\Js;
use Filament\Facades\Filament;
use Filament\Navigation\NavigationItem;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        if (app()->isLocal()) {
            $this->app->register(\Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider::class);
        }
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        FilamentAsset::register([
            Js::make('custom-script', asset('js/tinymce_5.10.7/tinymce.min.js')),
            Js::make('custom-script', asset('js/tinymce_5.10.7/custom-tiny.js')),
        ]);

        Filament::serving(function () {
            Filament::registerNavigationItems([
                NavigationItem::make('Test Review')
                    ->url(route('filament.admin.resources.tests.index'), shouldOpenInNewTab: true)
                    ->icon('heroicon-o-list-bullet')
                    ->activeIcon('heroicon-s-list-bullet')
                    ->group('Courses')
                    ->sort(3),
            ]);
        });
    }
}

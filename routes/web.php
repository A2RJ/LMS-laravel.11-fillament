<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\User\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);

Route::prefix('auth')->controller(AuthController::class)->group(function () {
    Route::get('/redirect', 'redirectToProvider');
    Route::get('/callback', 'handleProviderCallback');
});

Route::post('file', function () {
    \EdSDK\FlmngrServer\FlmngrServer::flmngrRequest(
        array(
            'dirFiles' => base_path() . '/public/storage'
        )
    );
})->middleware('auth');

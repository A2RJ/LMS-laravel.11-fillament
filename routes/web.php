<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);

Route::prefix('auth')->controller(AuthController::class)->group(function () {
    Route::get('/redirect', 'redirectToProvider')->name('login.google');
    Route::get('/callback', 'handleProviderCallback')->name('callback.google');
    Route::get('/login', 'login')->name('login');
    Route::get('/register', 'register')->name('register');
});

Route::post('file', function () {
    \EdSDK\FlmngrServer\FlmngrServer::flmngrRequest(
        array(
            'dirFiles' => base_path() . '/public/storage'
        )
    );
})->middleware('auth');

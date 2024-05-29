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
    Route::get('profile', 'profile')->name('profile');
});

Route::controller(HomeController::class)->group(function () {
    Route::get('category/{category}', 'categoryId')->name('category.id');
    Route::get('class/{class}', 'classId')->name('class.id');
    Route::get('test/{test}', 'testId')->name('test.id');
    Route::post('test/{test}', 'storeTestId')->name('post.test.id');
    Route::get('course', 'course')->name('course');
    Route::get('my-course', 'myCourse')->name('my.course');
});

Route::post('file', function () {
    \EdSDK\FlmngrServer\FlmngrServer::flmngrRequest(
        array(
            'dirFiles' => base_path() . '/public/storage'
        )
    );
})->middleware('auth');

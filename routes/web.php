<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\User\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('index');

Route::prefix('auth')->controller(AuthController::class)->group(function () {
    Route::get('/redirect', 'redirectToProvider')->name('login.google');
    Route::get('/callback', 'handleProviderCallback')->name('callback.google');
    Route::get('/login', 'login')->name('login');
    Route::post('/login', 'postLogin')->name('login');
    Route::get('/register', 'register')->name('register');
    Route::post('/register', 'postRegister')->name('register');
    Route::get('/logout', 'logout')->name('logout');
    Route::get('profile', 'profile')->name('profile');
});

Route::prefix('/')->group(function () {
    Route::controller(HomeController::class)->group(function () {
        Route::get('category/{category}', 'categoryId')->name('category.id');
        Route::get('course/{course}', 'courseId')->name('course.id');
        Route::get('session/{course}', 'session')->name('session.id');
        Route::get('course', 'course')->name('course');
        Route::get('my-course', 'myCourse')->name('my.course');
        Route::get('join/{course}', 'joinCourse')->name('join.course');
    });
    Route::controller(TestController::class)->group(function () {
        Route::get('test/{course}/{session}', 'test')->name('test.id');
        Route::post('test/{course}/{session}/{test_type_id}/{test_type}', 'storeTest')->name('post.test.id');
        Route::get('result/{result}', 'result')->name('test.result');
        Route::post('result/{test_number}', 'postResult')->name('post.test.result');
    });
});

Route::post('file', function () {
    \EdSDK\FlmngrServer\FlmngrServer::flmngrRequest(
        array(
            'dirFiles' => base_path() . '/public/storage'
        )
    );
})->middleware('auth');

<?php

use App\Http\Controllers\AuthApiController;
use App\Http\Controllers\JWTAuthController;
use App\Http\Controllers\TodoApiController;
use App\Http\Controllers\TodoController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::prefix('/')
    ->controller(TodoController::class)
    ->name('index.')
    ->group(function () {
        Route::get('/todo', 'index')->name('index');
        Route::get('/', 'login')->name('login');
        Route::get('/register', 'register')->name('register');
    });

Route::prefix('/api/todo')
    ->controller(TodoApiController::class)
    ->name('todo.')
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/', 'store')->name('store');
        Route::put('/{id}', 'update')->name('update');
        Route::delete('/{id}', 'delete')->name('delete');
    });

Route::prefix('/api/todo/auth')
    ->controller(JWTAuthController::class)
    ->name('auth.')
    ->group(function () {
        Route::post('/register', 'register')->name('register');
        Route::post('/login', 'login')->name('login');

        Route::middleware('api')->group(function(){
            Route::post('/logout', 'logout')->name('logout');
            Route::post('/refresh', 'refresh')->name('refresh');
            Route::post('/me', 'me')->name('me');
        });
    });



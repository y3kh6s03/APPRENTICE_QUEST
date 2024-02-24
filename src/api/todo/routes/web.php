<?php

use App\Http\Controllers\AuthApiController;
use App\Http\Controllers\TodoApiController;
use App\Http\Controllers\TodoController;
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

Route::prefix('/todo')
    ->controller(TodoController::class)
    ->name('todo.')
    ->group(function () {
        Route::get('/', 'index')->name('index');
    });

Route::prefix('/api')
    ->controller(TodoApiController::class)
    ->name('api.')
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/', 'store')->name('store');
        Route::put('/{id}', 'update')->name('update');
        Route::delete('/{id}', 'delete')->name('delete');
    });

Route::prefix('/api/auth')
    ->controller(AuthApiController::class)
    ->name('auth.')
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/', 'index')->name('login');
    });

<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::prefix('todo/auth')
// ->middleware('api')
// ->controller(AuthController::class)
// ->name('auth')
// ->group(function(){
//     Route::post('/login','login')->name('login');
//     Route::post('/logout','logout')->name('logout');
//     Route::post('/refresh','refresh')->name('refresh');
//     Route::post('/me','me')->name('me');
// });


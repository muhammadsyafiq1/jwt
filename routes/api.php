<?php

use App\Http\Controllers\JwtController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/login', [JwtController::class, 'login']);
Route::post('/register', [JwtController::class, 'register']);
Route::get('/cek-login', [JwtController::class, 'cekLogin']);

Route::group(['middleware' => ['jwt.auth']], function() {
    Route::get('/test', [JwtController::class, 'test']);
    Route::post('/logout', [JwtController::class, 'logout']);
});

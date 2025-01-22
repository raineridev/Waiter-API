<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::post('/register', [RegisterController::class, 'store'])
    ->name('user.store');
Route::post('/login', [LoginController::class, 'login'])
    ->name('user.login');
Route::delete('/logout', [LogoutController::class, 'delete'])
    ->name('user.delete')
    ->middleware('auth:sanctum');
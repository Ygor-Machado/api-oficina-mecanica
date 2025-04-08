<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/login', [AuthController::class, 'login'])
    ->middleware(['throttle:10,1'])
    ->name('login');

Route::post('/register', [AuthController::class, 'register'])
    ->middleware(['throttle:10,1'])
    ->name('register');

Route::post('/logout', [AuthController::class, 'logout'])
    ->middleware(['throttle:10,1', 'auth:sanctum'])
    ->name('logout');

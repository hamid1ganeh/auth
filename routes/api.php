<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::post('login',[AuthController::class,'login'])
->name('login');

Route::post('logout',[AuthController::class,'logout'])
    ->name('logout')
    ->middleware('auth:sanctum');

Route::get('user',[AuthController::class,'user'])
    ->name('user')
    ->middleware('auth:sanctum');

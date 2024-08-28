<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\AuthController;





Route::get('/', function () {
    return view('welcome');
});


Route::prefix('/admin')->name('admin.')->group(function () {

    Route::get('/login', [AuthController::class,'loginPage'])->name('loginPage');
    Route::post('/login', [AuthController::class,'login'])->name('login');
    Route::get('/logout',[AuthController::class,'login'])->name('logout');
    Route::get('/forgotPass', [AuthController::class,'forgotPass'])->name('forgotPass');
    Route::post('/recoveyPass', [AuthController::class,'recoveyPass'])->name('recoveyPass');
    Route::get('/changePass/{token}', [AuthController::class,'changePass'])->name('changePass');
    Route::PATCH('/changePassword/{token}', [AuthController::class,'changePassword'])->name('changePassword');

    Route::get('/', function () {
        return view('admin.home');
    })->name('home');


    Route::prefix('roles')->name('roles.')->group(function () {
        Route::get('/', [RoleController::class,'index'])->name('index');
        Route::get('/create', [RoleController::class,'create'])->name('create');
        Route::post('/store', [RoleController::class,'store'])->name('store');
        Route::get('{role}/edit', [RoleController::class,'edit'])->name('edit');
        Route::patch('{role}/update', [RoleController::class,'update'])->name('update');
        Route::delete('/destroy/{role}', [RoleController::class,'destroy'])->name('destroy');
    });
});

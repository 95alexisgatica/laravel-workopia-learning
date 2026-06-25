<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;

Route::get('/', [HomeController::class, 'index'])->name('home');

//Route::resource('jobs', JobController::class);
Route::resource('jobs', JobController::class)->except(['create', 'store', 'edit', 'update', 'destroy']);

Route::middleware('guest')->group(function () {
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'store']);
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'authenticate']);
});
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

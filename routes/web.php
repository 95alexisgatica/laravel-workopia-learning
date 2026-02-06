<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);

//SHOW mostrar un recurso puntual
//Route::get('/jobs', [JobController::class, 'index']);
//CREATE un formulario para crear un nuevo post
//Route::get('/jobs/create', [JobController::class, 'create']);
//SHOW mostrar un recurso puntual generalente id+get
//Route::get('/jobs/{id}', [JobController::class, 'show']);
//STORE donde enviamos el form y generalmente sera POST
//Route::post('/jobs', [JobController::class, 'store']);

Route::resource('jobs', JobController::class);

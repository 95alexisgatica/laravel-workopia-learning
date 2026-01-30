<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/jobs',function() {

    $title = 'Availabel Jobs';
    $jobs = [
        'web development',
        'database admin',
        'systems analyst'
    ];

    return view('jobs.index', compact('title','jobs'));

})->name('jobs');

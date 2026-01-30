<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/jobs',function() {
    //1. puedo pasar variable de distintas formas esta es una
    // $title = 'Availabel Jobs';

    // return view('jobs.index')->with('title',$title);

    //2. tambien la forma reducida
    // return view('jobs.index', [
    //     'title' => 'Available Jobs' 
    // ]);

    //3.compact form
    $title = 'Availabel Jobs';
    $jobs = [
        'web development',
        'database admin',
        'systems analyst'
    ];

    return view('jobs.index', compact('title','jobs'));

})->name('jobs');

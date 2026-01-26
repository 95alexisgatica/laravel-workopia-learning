<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/jobs',function() {
    return 'available Jobs';
});

//Route::get('/post/{id}', function(string $id) {
//    return '<h2 style="color:blue"> Post ' . $id . '</h2>';
//});

// 18.REQUEST OBJECT AND QUERY PARAMS
Route::get('/test',function(Request $request) {
    return [
        'method' => $request->method(),
        'url' => $request->url(),
        'path' => $request->path(),
        'fullUrl' => $request->fullUrl(),
        'ip' => $request->ip(),
        'userAgent' => $request->userAgent(),
        'header' => $request->header(),
    ];
});

Route::get('/users', function(Request $request) {
    //return $request->query('name');
    return $request->query('name');
});

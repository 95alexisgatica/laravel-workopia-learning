<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/jobs',function() {
    return 'available Jobs';
});

Route::get('/test', function() {
    return response('Hello Word', 200);
});

// Route::get('/notfound', function() {
//     return response('Page not found', 404);
// });

Route::get('/notfound', function() {
    // puedo modificar el header 
    // return new Response('Page not found', 404)->header('Content-Type', 'test/html');
});

Route::get('/test', function() {
    //puedo devolver arrays
    // return response()->json(['name' => 'alexio']);

    //agregar datos a las cookies
    return response()->json(['name' => 'alexio'])->cookie('name', 'Alexio Atun');
});

Route::get('/read-cookie', function(Request $request) {
    $cookieValue = $request->cookie('name');
    return response()->json(['cookie' => $cookieValue]);
});

Route::get('/download', function() {
    //puedo devolver arrays
    return response()->download(public_path('favicon.ico'));
});
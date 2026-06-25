<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Foundation\Configuration\Routing;
use App\Http\Middleware\LogRequest;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        $middleware->validateCsrfTokens(except: [
            '/submit'
        ]);

        //agrego a la variable $middleware a nivel global, oseq que cada peticion va a pasar por este middleware y loguear la información de la request en el archivo de log

       // $middleware->append(LogRequest::class);

       
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();

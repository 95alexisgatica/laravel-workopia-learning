<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

class LogRequest
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */

    //loguea la información de la request en el archivo de log, incluyendo el método, la url, los headers y el body
    public function handle(Request $request, Closure $next): Response
    {

        Log::info("{
            'method': '{$request->method()}',
            'url': '{$request->fullUrl()}',
            'headers': " . json_encode($request->headers->all()) . ",
            'body': " . json_encode($request->all()) . "
        }");

        return $next($request);
    }
}

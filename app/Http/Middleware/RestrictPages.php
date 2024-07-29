<?php
// app/Http/Middleware/RestrictPages.php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class RestrictPages
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle(Request $request, Closure $next): Response
    {
        $allowedRoutes = ['tickets', 'status'];

        if (!Auth::check() || !in_array($request->route()->getName(), $allowedRoutes)) {
            return redirect('/');
        }

        return $next($request);
    }
}

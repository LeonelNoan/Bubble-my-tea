<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Check if the authenticated user is an admin
        if (auth()->check() && auth()->user()->role === 'admin') {
            return $next($request);
        }

        // Redirect or respond accordingly (e.g., show an error page)
        return redirect('/')->with('error', 'Unauthorized access');
    }
}

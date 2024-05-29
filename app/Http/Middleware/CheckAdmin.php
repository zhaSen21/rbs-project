<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        $user = auth()->user();

        if ($user && $user->usertype === 'admin') {
            // User is an admin, allow access
            return $next($request);
        } elseif ($user && $user->usertype === 'user') {
            // User is a regular user, redirect to home page
            return redirect('/home');
        } else {
            // User is not authenticated or usertype is null, redirect to landing.index
            return redirect('/');
        }

    }
}

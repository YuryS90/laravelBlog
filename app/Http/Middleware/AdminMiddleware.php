<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        //Для проверки кто зашёл
        //dd(auth()->user()->name);
        if ((int)auth()->user()->role !== User::ROLE_ADMIN) {
            abort(404);
        }

        return $next($request);
    }
}
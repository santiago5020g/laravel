<?php

namespace App\Http\Middleware;

use Closure;

class CheckRole
{
    public function handle($request, Closure $next, $role)
    {
        
        if (auth()->check() && auth()->user()->inRole($role)) {
            return $next($request);
        }
        
        return redirect('/');
    }
}
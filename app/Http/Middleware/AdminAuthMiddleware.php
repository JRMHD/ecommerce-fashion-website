<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminAuthMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // Check if the user is authenticated as an admin
        if (!session()->has('admin')) {
            return redirect()->route('admin.login');
        }

        return $next($request);
    }
}

<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    public function handle(Request $request, Closure $next, $role)
    {
        $user = Auth::user();

        // Check if the user is logged in
        if ($user === null) {
            return redirect()->route('login');
        }

        // Check if the user has the required role
        if ($user->role === $role) {
            return $next($request);
        }

        // Redirect if user role doesn't match
        return redirect()->route('unauthorized');
    }
}

<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$roles): Response
    {
        if (!auth()->check()) {
            if ($request->expectsJson()) {
                return response()->json(['error' => 'Authentication required.'], 401);
            }

            return redirect('/login')->with('error', 'Please login to access this resource.');
        }

        $user = auth()->user();

        // If user is admin, allow access to everything
        if ($user->is_admin) {
            return $next($request);
        }

        // Check if user has one of the required roles
        if (empty($roles)) {
            // If no specific roles required, allow access for authenticated users
            return $next($request);
        }

        // For now, we're using a simple role system based on is_admin
        // In a more complex system, you might have different role levels
        if (in_array('user', $roles) && !$user->is_admin) {
            return $next($request);
        }

        if ($request->expectsJson()) {
            return response()->json(['error' => 'Insufficient permissions.'], 403);
        }

        return redirect('/')->with('error', 'Insufficient permissions to access this resource.');
    }
}

<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    public function handle(Request $request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            // Redirect ke dashboard berdasarkan guard
            switch ($guard) {
                case 'siswa':
                    return redirect()->route('siswa.dashboard');
                case 'guru':
                    return redirect()->route('guru.dashboard');
                case 'admin':
                    return redirect()->route('admin.dashboard');
                default:
                    return redirect('/');
            }
        }

        return $next($request);
    }
}

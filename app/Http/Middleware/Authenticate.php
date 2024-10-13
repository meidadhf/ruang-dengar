<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Authenticate
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            if ($request->is('guru/*')) {
                return route('login.guru');
            } elseif ($request->is('admin/*')) {
                return route('login.admin');
            } else {
                return route('login.siswa');
            }
        }
    }

    public function handle(Request $request, Closure $next): Response
    {
        // Memeriksa apakah pengguna terautentikasi
        if (! Auth::guard('guru')->check() && $request->is('guru/*')) {
            return redirect($this->redirectTo($request));
        }

        if (! Auth::guard('admin')->check() && $request->is('admin/*')) {
            return redirect($this->redirectTo($request));
        }

        if (! Auth::guard('siswa')->check() && $request->is('siswa/*')) {
            return redirect($this->redirectTo($request));
        }

        return $next($request);
    }
}

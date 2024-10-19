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
        if ($request->is('/dashboard')) {
            return route('.siswa');
        } elseif ($request->is('/dashboard')) {
            return route('.guru');
        } elseif ($request->is('/dashboard')) {
            return route('.admin');
        }

        return route('home'); // Default jika tidak ada segment cocok
    }
}

    public function handle(Request $request, Closure $next): Response
    {
        // Memeriksa apakah pengguna terautentikasi
        if (! Auth::guard('guru')->check() && $request->is('guru/dashboard')) {
            return redirect($this->redirectTo($request));
        }

        if (! Auth::guard('admin')->check() && $request->is('admin/dashboard')) {
            return redirect($this->redirectTo($request));
        }

        if (! Auth::guard('siswa')->check() && $request->is('siswa/dashboard')) {
            return redirect($this->redirectTo($request));
        }

        return $next($request);
    }
}

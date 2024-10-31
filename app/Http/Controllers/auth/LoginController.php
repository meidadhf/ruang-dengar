<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login'); // Form login universal
    }

    public function login(Request $request)
    {
        $credentials = $request->only('user_id', 'password');
        $prefix = substr($credentials['user_id'], 0, 3);

        if ($prefix === '224') {
            $guard = 'siswa';
            $redirectRoute = 'siswa.dashboard';
        } elseif ($prefix === '005') {
            $guard = 'guru';
            $redirectRoute = 'guru.dashboard';
        } elseif ($prefix === '001') {
            $guard = 'admin';
            $redirectRoute = 'admin.dashboard';
        } else {
            return back()->withErrors(['loginError' => 'ID tidak valid']);
        }

        if (Auth::guard($guard)->attempt(['id' => $credentials['user_id'], 'password' => $credentials['password']])) {
            return redirect()->route($redirectRoute);
        }

        return back()->withErrors(['loginError' => 'ID atau password salah']);
    }
}

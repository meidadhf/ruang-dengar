<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('templates.login'); // Form login universal
    }

    public function login(Request $request)
    {
        $request->validate([
            'user_id' => 'required|string',
            'password' => 'required|string',
            'role' => 'required|in:siswa,guru',
        ]);

        $credentials = $request->only('user_id', 'password');

        // Tentukan guard dan route berdasarkan role yang dipilih
        if ($request->role === 'siswa') {
            $guard = 'siswa';
            $redirectRoute = 'siswa.dashboard'; // Sesuaikan dengan route untuk dashboard siswa
        } elseif ($request->role === 'guru') {
            $guard = 'guru';
            $redirectRoute = 'guru.dashboard'; // Sesuaikan dengan route untuk dashboard guru
        }

        // Coba autentikasi menggunakan guard yang sesuai
        if (Auth::guard($guard)->attempt(['guru_id' => $credentials['user_id'], 'password' => $credentials['password']])) {
            return redirect()->route($redirectRoute);
        }

        return back()->withErrors(['loginError' => 'ID atau password salah']);
    }
}

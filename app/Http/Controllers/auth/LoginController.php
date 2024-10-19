<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Property untuk redirect setelah login
    protected $redirectTo = 'siswa/dashboard'; // Setelah login


    public function showLoginForm()
{
    return view('auth.login'); // Pastikan file auth/login.blade.php ada
}


    // Fungsi login
    public function login(Request $request)
    {
        // Validasi input login
        $credentials = $request->validate([
            'email' => ['required', 'email'], // Pastikan format email
            'password' => ['required'], // Validasi password
        ]);

        // Mencoba untuk login dengan credentials
        if (Auth::attempt($credentials)) { // Gunakan Auth default tanpa guard
            // Jika login berhasil, regenerate session
            $request->session()->regenerate();

            // Redirect ke halaman dashboard siswa
            return redirect()->intended($this->redirectTo);
        }

        // Jika login gagal, kembalikan ke halaman login dengan error
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    // Fungsi logout
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('siswa/dashboard');
    }
}

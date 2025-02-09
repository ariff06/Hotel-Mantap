<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
// use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginAdminController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/admin';

    public function __construct()
    {
    //     // Middleware untuk tamu (tidak boleh login ulang jika sudah login)
        $this->middleware('guest:admin', ['except' => 'logout']);
    }

    // Tampilkan form login admin
    public function formLogin()
    {
        return view('auth.login'); // Pastikan ada file view auth/login.blade.php
    }

    // Proses login admin
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required|string', // Validasi username sebagai string
            'password' => 'required|string', // Validasi password sebagai string
        ]);

        if (Auth::guard('admin')->attempt($credentials, $request->remember)) {
            // Regenerasi session jika login berhasil
            $request->session()->regenerate();
            return redirect()->intended(route('dashboard')); // Redirect ke dashboard admin
        }

        // Jika login gagal
        return back()->withErrors([
            'username' => 'Kredensial yang diberikan tidak cocok.',
        ])->onlyInput('username'); // Kirim ulang username yang diinput
    }

    // Proses logout admin
    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('admin.login');
    }
}
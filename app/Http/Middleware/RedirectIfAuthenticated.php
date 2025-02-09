<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            // Jika pengguna adalah admin, arahkan ke dashboard admin
            if (Auth::guard('admin')->check()) {
                return redirect()->route('dashboard');
            }
            // Jika pengguna sudah login di guard tertentu, arahkan ke halaman utama
            if (Auth::guard($guard)->check()) {
                return redirect(RouteServiceProvider::HOME);
            }
        }

        return $next($request);
    }
}

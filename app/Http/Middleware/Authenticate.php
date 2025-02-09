<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    protected function redirectTo($request)
    {
        if ($request->is('admin/*')) {
            return route('admin.login');
        }
        if ($request->is('resep/*')) {
            return route('resep.login');
        }
        if (! $request->expectsJson()) {
            return route('login');
        }
    // {
    //     if ($request->is(config('admin.path') . '*')) {
    //         return route('admin.login');
    //     }
    //     if (!$request->expectsJson()) {
    //     return route('login'); // Arahkan ke route login
    // }
    
    }
}

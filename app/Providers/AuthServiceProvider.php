<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * @var array<class-string,
     */
Protected $policies = [

    ];

    /**
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('role', function($user, ...$role){
            return in_array($user->role, $role);
        });
     
    }
}

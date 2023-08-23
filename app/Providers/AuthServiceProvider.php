<?php

namespace App\Providers;

 use Illuminate\Support\Facades\Gate;

//use Illuminate\Auth\Access\Gate;
use Illuminate\Contracts\Auth\Access\Gate as AccessGate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
       
       Gate::define('isAdmin', function($user){

        return $user->role =='1';
        });

         Gate::define('isHamkar', function($user){

             return $user->role =='2';
            });
    }
}

<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        // Определение является ли пользователь ведущим программистом
        Gate::define('senior', function ($user) {
            if ($user->role == 'senior') {
                return true;
            }
            return false;
        });
        // Определение является ли пользователь программистом
        Gate::define('junior', function ($user) {
            if ($user->role == 'junior') {
                return true;
            }
            return false;
        });
    }
}

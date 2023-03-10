<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        'App\Models\Team' => 'App\Policies\TeamPolicy',
        'App\Models\User' => 'App\Policies\UserPolicy',
        'App\Models\Product' => 'App\Policies\ProductPolicy',
        'App\Models\ProductPrice' => 'App\Policies\ProductPricePolicy',
        'App\Models\ProductStock' => 'App\Policies\ProductStockPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::before(function ($user, $ability) {
            if ($user->hasRole('super-admin')) {
                return true;
            }
        });
    }
}

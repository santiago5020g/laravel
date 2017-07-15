<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
 

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot(GateContract $gate)
    {
        
        foreach (get_class_methods(new \App\Policies\PostPolicy) as $method) {
        	$gate->define($method, "App\Policies\PostPolicy@{method}");
        }

        $this->registerPolicies($gate);

    }
}

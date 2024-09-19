<?php

namespace App\Providers;

use App\Models\Address;
use App\Policies\AddressPolicy;
// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    // protected $policies = [
    //     // 'App\Models\Model' => 'App\Policies\ModelPolicy',

    // ];
    protected $policies = [
        Address::class => AddressPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        $this->registerPolicies();

        //
    }
}

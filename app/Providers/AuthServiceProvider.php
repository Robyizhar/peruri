<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Models\Jabatan' => 'App\Policies\MasterdataPolicy',
        'App\Models\Level' => 'App\Policies\MasterdataPolicy',
        'App\Models\Pangkat' => 'App\Policies\MasterdataPolicy',
        'App\Models\Unit' => 'App\Policies\MasterdataPolicy',

    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        
    }

  
}
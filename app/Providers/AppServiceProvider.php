<?php

namespace App\Providers;


// use App\Services\KaryawanService;

use App\Services\CutiKaryawanService;
use App\Services\Interfaces\CutiKaryawanServiceInterface;
use App\Services\KaryawanServices;
use App\Services\Interfaces\KaryawanServicesInterfaces;
use App\Services\Interfaces\NilainkiServicesInterfaces;
use App\Services\NilainkiServices;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
         Schema::defaultStringLength(191);

        /**Module Pages */
        $this->app->bind(KaryawanServicesInterfaces::class, KaryawanServices::class);
        // module Nilai NKI
        $this->app->bind(NilainkiServicesInterfaces::class, NilainkiServices::class);
        // modul Cuti Karyawan 
        $this->app->bind(CutiKaryawanServiceInterface::class, CutiKaryawanService::class);
    }
}

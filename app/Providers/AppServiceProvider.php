<?php

namespace App\Providers;

use App\CmsSetting;
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

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        $settings = CmsSetting::pluck('content','name');
        view()->share('settings', $settings);
    }
}

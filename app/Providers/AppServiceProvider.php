<?php

namespace App\Providers;

use App\Components\CVEntry;
use Illuminate\Support\Facades\Blade;
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

    public function boot()
    {
        app('view');
        app('blade.compiler')->component('package-alert', CVEntry::class);
    }
}

<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

// Fix: Laravel 5.4: Specified key was too long error
// See: https://laravel-news.com/laravel-5-4-key-too-long-error
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Fix: Laravel 5.4: Specified key was too long error
        // See: https://laravel-news.com/laravel-5-4-key-too-long-error
        Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}

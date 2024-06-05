<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Country;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        $countries = Country::orderBy('country_name','asc')->get();
        // Share the countries data with all views
        view()->composer('*', function ($view) use($countries) {
            $view->with('countries', $countries);
        });
    }
}

<?php

namespace BoxGrater\Merchants\Providers;

use Illuminate\Support\ServiceProvider;

class MerchantServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../../resources/views/merchants/', 'merchants');
        $this->loadViewsFrom(__DIR__.'/../../resources/views/merchantreps/', 'merchantreps');
        $this->loadMigrationsFrom(__DIR__.'/../../database/migrations');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //$this->app->bind('recipes', 'Bistro\Food\Recipes\Facades\RecipesFacade');
    }

}

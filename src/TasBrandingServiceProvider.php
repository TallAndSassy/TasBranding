<?php

namespace TallAndSassy\TasBranding;

use Illuminate\Support\ServiceProvider;

class TasBrandingServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'tallandsassy');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'tassy');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
         $this->loadRoutesFrom(__DIR__.'/routes.php');

         $this->publishes([
            __DIR__.'/public/branding' => public_path('tassy/branding'),
        ], 'public');
        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/tasbranding.php', 'tasbranding');

        // Register the service the package provides.
        $this->app->singleton('tasbranding', function ($app) {
            return new TasBranding;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['tasbranding'];
    }

    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole()
    {
        // Publishing the configuration file.
        $this->publishes([
            __DIR__.'/../config/tasbranding.php' => config_path('tasbranding.php'),
        ], 'tasbranding.config');

        // Publishing the views.
        /*$this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/tallandsassy'),
        ], 'tasbranding.views');*/

        // Publishing assets.
        /*$this->publishes([
            __DIR__.'/../resources/assets' => public_path('vendor/tallandsassy'),
        ], 'tasbranding.views');*/

        // Publishing the translation files.
        /*$this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/tallandsassy'),
        ], 'tasbranding.views');*/

        // Registering package commands.
        // $this->commands([]);
    }
}

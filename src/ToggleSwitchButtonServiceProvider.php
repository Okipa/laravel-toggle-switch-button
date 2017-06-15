<?php

namespace Okipa\LaravelToggleSwitchButton;

use Illuminate\Support\ServiceProvider;

class ToggleSwitchButtonServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../views', 'toggle-switch-button');
        
        $this->publishes([
            __DIR__ . '/../config/toggle-switch-button.php' => config_path('toggle-switch-button.php'),
        ], 'toggle-switch-button::config');
    
        $this->publishes([
            __DIR__ . '/../views/styles' => resource_path('views/toggle-switch-button/styles'),
        ], 'toggle-switch-button::styles');
    
        $this->publishes([
            __DIR__ . '/../views/templates' => resource_path('views/toggle-switch-button/templates'),
        ], 'toggle-switch-button::templates');
    }
    /**
     * {@inheritDoc}
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/toggle-switch-button.php', 'toggle-switch-button'
        );
        
        $this->app->singleton('toggle-switch-button', function ($app) {
            return $app->make(ToggleSwitchButton::class);
        });
    }
}

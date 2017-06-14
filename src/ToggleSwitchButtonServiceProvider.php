<?php

namespace Okipa\LaravelToggleSwitchButton;

use Illuminate\Support\ServiceProvider;

class ToggleSwitchButtonServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../views', 'toggle_switch_button');
        
        $this->publishes([
            __DIR__ . '/../config/toggle_switch_button.php' => config_path('toggle_switch_button.php'),
        ], 'toggle-switch-button::config');
    
        $this->publishes([
            __DIR__ . '/../views/styles' => resource_path('views/toggle_switch_button/styles'),
        ], 'toggle-switch-button::styles');
    
        $this->publishes([
            __DIR__ . '/../views/template' => resource_path('views/toggle_switch_button/template'),
        ], 'toggle-switch-button::template');
    }
    /**
     * {@inheritDoc}
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/toggle_switch_button.php', 'toggle_switch_button'
        );
        
        $this->app->singleton('toggle_switch_button', function ($app) {
            return $app->make(ToggleSwitchButton::class);
        });
    }
}

<?php

namespace Okipa\LaravelToggleSwitchButton;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Support\ServiceProvider;

class ToggleSwitchButtonServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../views', 'toggle-switch-button');
        $this->publishes([
            __DIR__ . '/../views' => resource_path('views/vendor/toggle-switch-button'),
        ], 'toggle-switch-button::views');
    }

    public function register()
    {
        $this->app->singleton('toggle-switch-button', function(Application $app) {
            return $app->make(ToggleSwitchButton::class);
        });
    }
}

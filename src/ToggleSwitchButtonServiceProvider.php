<?php

namespace Okipa\LaravelToggleSwitchButton;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Support\ServiceProvider;
use Okipa\LaravelHtmlHelper\HtmlHelperServiceProvider;

class ToggleSwitchButtonServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../views', 'toggle-switch-button');
        $this->publishes([
            __DIR__ . '/../views' => resource_path('views/vendor/components'),
        ], 'toggle-switch-button::views');
        // we load the laravel html helper package
        // https://github.com/Okipa/laravel-html-helper
        $this->app->register(HtmlHelperServiceProvider::class);
    }

    public function register()
    {
        $this->app->singleton('toggle-switch-button', function(Application $app) {
            return $app->make(ToggleSwitchButton::class);
        });
    }
}

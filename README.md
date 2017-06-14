# laravel-toggle-switch-button
A customizable and configurable toggle switch button generator for Laravel that enables you to simply display it on your projects pages.

## Installation
1. Install the package with composer :
```
composer require laravel-toggle-switch-button
```
2. Add the package service provider in the `register()` method from your `app/Providers/AppServiceProvider.php` :
```
// laravel toggle switch button
// https://github.com/Okipa/laravel-toggle-switch-button
$this->app->register(Okipa\LaravelToggleSwitchButton\ToggleSwitchButtonServiceProvider::class);
```
3. Add the facade of this package to the $aliases` array of the from your `config/app.php` file :
```
'ToggleSwitchButton'  => Okipa\LaravelToggleSwitchButton\Facades\ToggleSwitchButton::class,
```

4. Publish the package configuration and views files in your project :
```
php artisan vendor:publish --tag=toggle_switch_button
```

## Usage

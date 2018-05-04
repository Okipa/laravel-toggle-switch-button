# laravel-toggle-switch-button

[![Source Code](https://img.shields.io/badge/source-okipa/laravel--toggle--switch--button-blue.svg)](https://github.com/Okipa/laravel-toggle-switch-button)
[![Latest Version](https://img.shields.io/github/release/okipa/laravel-toggle-switch-button.svg?style=flat-square)](https://github.com/Okipa/laravel-toggle-switch-button/releases)
[![Total Downloads](https://img.shields.io/packagist/dt/okipa/laravel-toggle-switch-button.svg?style=flat-square)](https://packagist.org/packages/okipa/laravel-toggle-switch-button)
[![License: MIT](https://img.shields.io/badge/License-MIT-blue.svg)](https://opensource.org/licenses/MIT)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/Okipa/laravel-toggle-switch-button/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/Okipa/laravel-toggle-switch-button/?branch=master)

A customizable and configurable toggle switch button generator for Laravel that enables you to simply display it on your projects pages.

![Laravel Toggle Switch Button](https://raw.githubusercontent.com/Okipa/laravel-toggle-switch-button/master/img/laravel-toggle-switch-button.png)

------------------------------------------------------------------------------------------------------------------------

## Installation

- Install the package with composer :
```bash
composer require okipa/laravel-toggle-switch-button
```
- Laravel 5.5+ uses Package Auto-Discovery, so doesn't require you to manually add the ServiceProvider and the Facade alias.
If you don't use auto-discovery or if you use a Laravel 5.4- version, add the package service provider in the `register()` method from your `app/Providers/AppServiceProvider.php` :
```php
// laravel toggle switch button
// https://github.com/Okipa/laravel-toggle-switch-button
$this->app->register(Okipa\LaravelToggleSwitchButton\ToggleSwitchButtonServiceProvider::class);
```
- Then, add the facade of this package to the `$aliases` array of the from your `config/app.php` file :
```php
'ToggleSwitchButton'  => Okipa\LaravelToggleSwitchButton\Facades\ToggleSwitchButton::class,
```
- Load the package `SASS` or `CSS` file from the `[path/to/composer/vendor]/okipa/laravel-toggle-switch-button/styles` directory to your project.

------------------------------------------------------------------------------------------------------------------------

## Usage
Simply call the toggle switch button rendering in your form as precised in the following example :
```php
{!! ToggleSwitchButton::render(
    'active',
    old('active'),
    '<i class="fa fa-power-off" aria-hidden="true"></i>',
    'Status'
) !!}
```

**Parameters :**
1. (required) ***string*** $inputName : set the input name. Also used by default for the input id.
2. (optional) ***bool*** $inputChecked : determine whether your toggle switch button is checked or not.
3. (optional) ***string*** $labelIcon : set the icon that will appear before the toggle switch button.
4. (optional) ***string*** $labelString : set the label that will appear before the toggle switch button.
5. (optional) ***string*** $inputId : set the input id. If not filled, the input name will be used.

------------------------------------------------------------------------------------------------------------------------

## Customize styles
If you use `CSS`, just override the package styles.

If you use `SASS`, you can override the following variables **before** the package SASS file import. Check the following example for a bootstrap use :
```sass
$toggle_switch_button_label_background_color: $input-group-addon-bg; // default #eeeeee
$toggle_switch_button_label_border_color: $input-group-addon-border-color; // default #ccc
$toggle_switch_button_label_font_size: $font-size-small; // default inherit
$toggle_switch_button_unchecked_background_color: $input-group-addon-border-color; // default #ccc
$toggle_switch_button_checked_background_color: $brand-primary; // default #337ab7
$toggle_switch_button_border_radius: $btn-border-radius-base; // default 4px
```

------------------------------------------------------------------------------------------------------------------------

## Customize templates
Publish the package blade templates file in your project :
```bash
php artisan vendor:publish --tag=toggle-switch-button::views
```
Then, change the content from your `resources/views/vendor/toggle-switch-button/switch-button.blade.php` file.

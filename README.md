# laravel-toggle-switch-button

[![Source Code](https://img.shields.io/badge/source-okipa/laravel--toggle--switch--button-blue.svg)](https://github.com/Okipa/laravel-toggle-switch-button)
[![Latest Version](https://img.shields.io/github/release/okipa/laravel-toggle-switch-button.svg?style=flat-square)](https://github.com/Okipa/laravel-toggle-switch-button/releases)
[![Total Downloads](https://img.shields.io/packagist/dt/okipa/laravel-toggle-switch-button.svg?style=flat-square)](https://packagist.org/packages/okipa/laravel-toggle-switch-button)
[![License: MIT](https://img.shields.io/badge/License-MIT-blue.svg)](https://opensource.org/licenses/MIT)
[![Code Coverage](https://scrutinizer-ci.com/g/Okipa/laravel-toggle-switch-button/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/Okipa/laravel-toggle-switch-button/?branch=master)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/Okipa/laravel-toggle-switch-button/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/Okipa/laravel-toggle-switch-button/?branch=master)

A customizable and configurable toggle switch button generator for Laravel that enables you to simply display it on your projects pages.

![Laravel Toggle Switch Button](https://raw.githubusercontent.com/Okipa/laravel-toggle-switch-button/master/img/laravel-toggle-switch-button.png)

------------------------------------------------------------------------------------------------------------------------

## Installation

### Versions
- [V1](https://github.com/Okipa/laravel-toggle-switch-button/tree/v1) : `composer require okipa/laravel-toggle-switch-button:^1.0.0`
- [V2](https://github.com/Okipa/laravel-toggle-switch-button/tree/v2) : `composer require okipa/laravel-toggle-switch-button:^2.0.0`

### For Laravel >=5.4 only
Add the package service provider in the `register()` method from your `app/Providers/AppServiceProvider.php` :
```php
// laravel toggle switch button
// https://github.com/Okipa/laravel-toggle-switch-button
$this->app->register(Okipa\LaravelToggleSwitchButton\ToggleSwitchButtonServiceProvider::class);
```

### Styles import
- Load the package `SASS` or `CSS` file from the `[path/to/composer/vendor]/okipa/laravel-toggle-switch-button/styles` directory to your project.

------------------------------------------------------------------------------------------------------------------------

## Usage
Since the toggle switch button implements the `Htmlable` interface, just call it this way in your blade file :
```php
{{ toggleSwitchButton()
    ->name('active')
    ->checked(old('active') or $model->active)
    ->icon('<i class="fas fa-power-off"></i>')
    ->label('Activation') }}
```

------------------------------------------------------------------------------------------------------------------------

## API

Public methods
See the available public methods in the [ToggleSwitchButton class](https://github.com/Okipa/laravel-toggle-switch-button/blob/master/src/ToggleSwitchButton.php)

------------------------------------------------------------------------------------------------------------------------

## Customize styles
If you use `CSS`, just override the package styles.

If you use `SASS`, you can override the following variables **before** the package SASS file import. Check the following example for a bootstrap use :
```sass
// bootstrap 4 example
$toggle_switch_button_label_background_color: $input-group-addon-bg;
$toggle_switch_button_label_border_color: $input-group-addon-border-color;
$toggle_switch_button_label_font_size: $font-size-base;
$toggle_switch_button_unchecked_background_color: $input-group-addon-border-color;
$toggle_switch_button_checked_background_color: $primary;
$toggle_switch_button_border_radius: $btn-border-radius;
@import '[path/to/composer/vendor]/okipa/laravel-toggle-switch-button/styles/styles';
```

------------------------------------------------------------------------------------------------------------------------

## Customize templates
Publish the package blade templates file in your project :
```bash
php artisan vendor:publish --tag=toggle-switch-button::views
```
Then, change the content from your `resources/views/vendor/toggle-switch-button/switch-button.blade.php` file.

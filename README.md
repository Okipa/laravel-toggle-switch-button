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
Simply call the toggle switch button rendering in your view as precised in the following example :
```
{!! ToggleSwitchButton::render(
    'title',                                                // (required) string $input_name : must be unique on the page, also used for the input id generation
    config('settings.image_optimization'),                  // (optional) bool $input_checked : determine if your toggle switch button is checked or not
    '<i class="fa fa-compress" aria-hidden="true"></i>',    // (optional) string $label_icon : set the icon that will appear before the toggle switch button
    trans('global.action.activate')                         // (optional) string $label_string : set the label that will appear before the toggle switch button
) !!}
```

## Customize styles
To customize the laravel-toggle-switch-button styles, you have 2 possible solutions :

### Using inline CSS
Change the CSS content from your `resources/views/toggle_switch_button.blade.php` file.  
Make sure that you have published the package views before and that the `styles.load_from_blade` value in your `config/toggle_switch_styles.php` file is `true`

### Importing SASS (recommended method)
Set the `styles.load_from_blade` value to false in your `config/toggle_switch_button.php` file.  
Then, import the package sass in your page scss page file :
```
@import '[target the root vendor directory]/okipa/laravel-toggle-switch-button/sass/toggle_switch_button';
```
You can override the following sass variables **before** your sass import. Check the following example :
```
$toggle_switch_button_unchecked_background-color: $input-group-addon-border-color; // default #ccc
$toggle_switch_button_checked_background-color: $brand-primary; // default #337ab7
```

## Customize the template
To customize the laravel-toggle-switch-button template, change the content from your `resources/views/toggle_switch_button.blade.php` file.  
Make sure that you have published the package views before.
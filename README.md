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

## Usage
Simply call the toggle switch button rendering in your form as precised in the following example :
```
{!! ToggleSwitchButton::render(
    'title',
    config('settings.image_optimization'),
    '<i class="fa fa-compress" aria-hidden="true"></i>',
    trans('global.action.activate')
) !!}
```

**Parameters :**
1. (required) ***string*** $input_name : must be unique on the page, also used for the input id generation
2. (optional) ***bool*** $input_checked : determine whether your toggle switch button is checked or not
3. (optional) ***string*** $label_icon : set the icon that will appear before the toggle switch button
4. (optional) ***string*** $label_string : set the label that will appear before the toggle switch button

## Customize styles
To customize the laravel-toggle-switch-button styles, you have 2 possible solutions :

### Using inline CSS
Publish the package blade styles file in your project :
```
php artisan vendor:publish --tag=toggle-switch-button::styles
```
Change the CSS content from your `resources/views/toggle-switch-button/styles/styles.blade.php` file.

### Importing SASS (recommended method)
Publish the package configuration file in your project :
```
php artisan vendor:publish --tag=toggle-switch-button::config
```
Set the `styles.load_from_blade` value to `false` in your `config/toggle-switch-button.php` file.  
Then, import the package sass in your page scss page file :
```
@import '[target the root vendor directory]/okipa/laravel-toggle-switch-button/sass/styles';
```
You can override the following sass variables **before** your sass import. Check the following example with a bootstrap use :
```
$toggle_switch_button_label_background_color: $input-group-addon-bg; // default #eeeeee
$toggle_switch_button_label_border-color: $input-group-addon-border-color; // default #ccc
$toggle_switch_button_label_font-size: $font-size-small; // default inherit
$toggle_switch_button_unchecked_background-color: $input-group-addon-border-color; // default #ccc
$toggle_switch_button_checked_background-color: $brand-primary; // default #337ab7
$toggle_switch_button_border_radius: $btn-border-radius-base; // default 4px
```

## Customize the template
Publish the package blade template file in your project :
```
php artisan vendor:publish --tag=toggle-switch-button::template
```
Then, change the content from your `resources/views/template/toggle-switch-button.blade.php` file.  
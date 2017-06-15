<?php

namespace Okipa\LaravelToggleSwitchButton\Facades;

use Illuminate\Support\Facades\Facade;

class ToggleSwitchButton extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'toggle-switch-button';
    }
}

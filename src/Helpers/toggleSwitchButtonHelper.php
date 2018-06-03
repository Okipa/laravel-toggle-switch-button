<?php

use Okipa\LaravelToggleSwitchButton\ToggleSwitchButton;

if (! function_exists('toggleSwitchButton')) {
    function toggleSwitchButton()
    {
        return app(ToggleSwitchButton::class);
    }
}
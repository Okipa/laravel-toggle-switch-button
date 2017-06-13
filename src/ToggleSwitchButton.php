<?php

namespace Okipa\LaravelToggleSwitchButton;

use Illuminate\Database\Eloquent\Model;
use View;

class ToggleSwitchButton
{
    public function render(Model $model, string $attribute, string $route)
    {
        return View::make('toggle_switch_button::toggle-switch-button', [
            'model'    => $model,
            'attribute' => $attribute,
            'route'     => $route,
        ])->render();
    }
}

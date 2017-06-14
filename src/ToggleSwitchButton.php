<?php

namespace Okipa\LaravelToggleSwitchButton;

use View;

class ToggleSwitchButton
{
    public function render(string $input_name, bool $input_checked = false, string $label_icon = null, string $label_string = null)
    {
        return View::make('toggle_switch_button::toggle-switch-button', [
            'input_name'    => $input_name,
            'input_checked' => $input_checked,
            'label_icon'    => $label_icon,
            'label_string'  => $label_string,
        ])->render();
    }
}

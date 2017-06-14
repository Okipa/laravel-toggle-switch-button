<?php

namespace Okipa\LaravelToggleSwitchButton;

use InvalidArgumentException;
use View;

class ToggleSwitchButton
{
    public function render(string $input_name, bool $input_checked = false, string $label_icon = null, string $label_string = null)
    {
        if(!is_bool(config('toggle_switch_button::styles_mode'))){
            throw new InvalidArgumentException('Wrong ' . json_encode(config('toggle_switch_button::styles_mode')) . ' value given from your "config/toggle_switch_button.php" file. The value should be "true" or "false".');
        }
        
        return View::make('toggle_switch_button::toggle-switch-button', [
            'input_name'    => $input_name,
            'input_checked' => $input_checked,
            'label_icon'    => $label_icon,
            'label_string'  => $label_string,
        ])->render();
    }
}

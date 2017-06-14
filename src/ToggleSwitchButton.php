<?php

namespace Okipa\LaravelToggleSwitchButton;

use InvalidArgumentException;
use View;

class ToggleSwitchButton
{
    public function render(string $input_name, bool $input_checked = false, string $label_icon = null, string $label_string = null)
    {
        $accepted_styles_configs = ['blade', 'sass'];
        if(!in_array(config('toggle_switch_button::styles_mode'), $accepted_styles_configs)){
            throw new InvalidArgumentException('Wrong "' . config('toggle_switch_button::styles_mode') . '" value given in your "config/toggle_switch_button.php" file. Accepted values : "blade" or "sass"');
        }
        
        return View::make('toggle_switch_button::toggle-switch-button', [
            'input_name'    => $input_name,
            'input_checked' => $input_checked,
            'label_icon'    => $label_icon,
            'label_string'  => $label_string,
        ])->render();
    }
}

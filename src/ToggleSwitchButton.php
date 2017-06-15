<?php

namespace Okipa\LaravelToggleSwitchButton;

use InvalidArgumentException;
use View;

class ToggleSwitchButton
{
    
    /**
     * ToggleSwitchButton constructor.
     */
    public function __construct()
    {
        // we check the config value validity
        if(!is_bool(config('toggle-switch-button.styles.load_from_blade'))){
            throw new InvalidArgumentException('Wrong ' . json_encode(config('toggle-switch-button.styles.load_from_blade')) . ' value given from your "config/toggle-switch-button.php" file. The value should be "true" or "false".');
        }
    }
    
    /**
     * Render a toggle switch button
     *
     * @param string $input_name (required)
     * @param bool|null $input_checked (optional)
     * @param string|null $label_icon (optional)
     * @param string|null $label_string (optional)
     * @return mixed
     */
    public function render(string $input_name, bool $input_checked = null, string $label_icon = null, string $label_string = null)
    {
        // we return the generated html from the blade file
        return View::make('toggle-switch-button::templates/switch-button', [
            'input_name'    => $input_name,
            'input_checked' => $input_checked,
            'label_icon'    => $label_icon,
            'label_string'  => $label_string,
        ])->render();
    }
}

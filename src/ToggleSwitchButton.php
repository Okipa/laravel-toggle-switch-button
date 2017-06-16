<?php

namespace Okipa\LaravelToggleSwitchButton;

use View;

class ToggleSwitchButton
{
    
    /**
     * Render a toggle switch button
     *
     * @param string $input_name (required)
     * @param bool $input_checked (optional)
     * @param string $label_icon (optional)
     * @param string $label_string (optional)
     * @param string $input_id (optional)
     *
     * @return mixed
     */
    public function render(
        string $input_name,
        bool $input_checked = null,
        string $label_icon = null,
        string $label_string = null,
        string $input_id = null
    ) {
        // we return the generated html from the blade file
        return View::make('toggle-switch-button::switch-button', [
            'input_name'    => $input_name,
            'input_checked' => $input_checked,
            'label_icon'    => $label_icon,
            'label_string'  => $label_string,
            'input_id'      => $input_id,
        ])->render();
    }
}

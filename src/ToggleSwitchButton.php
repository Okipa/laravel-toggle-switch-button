<?php

namespace Okipa\LaravelToggleSwitchButton;

use View;

class ToggleSwitchButton
{
    /**
     * Render a toggle switch button
     *
     * @param string $inputName    (required)
     * @param bool   $inputChecked (optional)
     * @param string $labelIcon    (optional)
     * @param string $labelString  (optional)
     * @param string $inputId      (optional)
     *
     * @return mixed
     */
    public function render(
        string $inputName,
        bool $inputChecked = null,
        string $labelIcon = null,
        string $labelString = null,
        string $inputId = null
    ) {
        // we return the generated html from the blade file
        return View::make('toggle-switch-button::switch-button', [
            'inputName'    => $inputName,
            'inputChecked' => $inputChecked,
            'labelIcon'    => $labelIcon,
            'labelString'  => $labelString,
            'inputId'      => $inputId,
        ])->render();
    }
}

<?php

namespace Okipa\LaravelToggleSwitchButton;

use View;

class ToggleSwitchButton
{
    /**
     * Render a toggle switch button
     *
     * @param string $inputName    (required)
     * @param null|bool   $inputChecked (optional)
     * @param null|string $labelIcon    (optional)
     * @param null|string $labelString  (optional)
     * @param null|string $inputId      (optional)
     *
     * @return string
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

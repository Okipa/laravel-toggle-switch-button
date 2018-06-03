<?php

namespace Okipa\LaravelToggleSwitchButton;

use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Database\Eloquent\Model;

class ToggleSwitchButton implements Htmlable
{
    /**
     * The toggle associated model.
     *
     * @property \Illuminate\Database\Eloquent\Model $model
     */
    protected $model;
    /**
     * The toggle name.
     *
     * @property string $name
     */
    protected $name;
    /**
     * The toggle icon.
     *
     * @property string $icon
     */
    protected $icon;
    /**
     * The toggle label.
     *
     * @property string $label
     */
    protected $label;
    /**
     * The toggle check status.
     *
     * @property string $checked
     */
    protected $checked = false;

    /**
     * Set the toggle associated model.
     *
     * @param \Illuminate\Database\Eloquent\Model $model
     *
     * @return \Okipa\LaravelToggleSwitchButton\ToggleSwitchButton
     */
    public function model(Model $model): ToggleSwitchButton
    {
        $this->model = $model;

        return $this;
    }

    /**
     * Set the toggle name.
     *
     * @param string $name
     *
     * @return \Okipa\LaravelToggleSwitchButton\ToggleSwitchButton
     */
    public function name(string $name): ToggleSwitchButton
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Set the toggle icon.
     *
     * @param string $icon
     *
     * @return \Okipa\LaravelToggleSwitchButton\ToggleSwitchButton
     */
    public function icon(string $icon): ToggleSwitchButton
    {
        $this->icon = $icon;

        return $this;
    }

    /**
     * Set the toggle checked status.
     *
     * @return \Okipa\LaravelToggleSwitchButton\ToggleSwitchButton
     */
    public function checked(): ToggleSwitchButton
    {
        $this->checked = true;

        return $this;
    }

    /**
     * Set the toggle label.
     *
     * @param string $label
     *
     * @return \Okipa\LaravelToggleSwitchButton\ToggleSwitchButton
     */
    public function label(string $label): ToggleSwitchButton
    {
        $this->label = $label;

        return $this;
    }

    /**
     * Get content as a string of HTML.
     *
     * @return string
     * @throws \Throwable
     */
    public function toHtml()
    {
        return (string) $this->render();
    }

    /**
     * Render the toggle switch button.
     *
     * @return string
     * @throws \Throwable
     */
    public function render()
    {
        return view('toggle-switch-button::switch-button', [
            'name'    => $this->name,
            'checked' => $this->checked,
            'icon'    => $this->icon,
            'label'   => $this->label,
        ])->render();
    }
}

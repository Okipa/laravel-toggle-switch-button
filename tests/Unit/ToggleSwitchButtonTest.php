<?php

namespace Okipa\LaravelSettingsManagement\Test\Unit;

use Okipa\LaravelSettingsManagement\Test\ToggleSwitchButtonTestCase;

class ToggleSwitchButtonTest extends ToggleSwitchButtonTestCase
{
    public function testToggleSwitchButtonHtmlRenderingWithAllAttributes()
    {
        $html = toggleSwitchButton()->name('test_name')->checked(true)->icon('test-icon')->label('test-label')->toHtml();
        $this->assertEquals(view('toggle-switch-button::components.toggle-switch-button', [
            'name'    => 'test_name',
            'checked' => true,
            'icon'    => 'test-icon',
            'label'   => 'test-label',
        ]), $html);
    }
    
    public function testToggleSwitchButtonHtmlRenderingWithNoAttributes()
    {
        $html = toggleSwitchButton()->toHtml();
        $this->assertEquals(view('toggle-switch-button::components.toggle-switch-button', [
            'name'    => null,
            'checked' => false,
            'icon'    => null,
            'label'   => null,
        ]), $html);
    }

    public function testToggleSwitchButtonHtmlRenderingWithName()
    {
        $html = toggleSwitchButton()->name('testName')->toHtml();
        $this->assertEquals(view('toggle-switch-button::components.toggle-switch-button', [
            'name'    => 'testName',
            'checked' => false,
            'icon'    => null,
            'label'   => null,
        ]), $html);
    }

    public function testToggleSwitchButtonHtmlRenderingWWithCheckStatus()
    {
        $html = toggleSwitchButton()->checked(true)->toHtml();
        $this->assertEquals(view('toggle-switch-button::components.toggle-switch-button', [
            'name'    => null,
            'checked' => true,
            'icon'    => null,
            'label'   => null,
        ]), $html);
    }

    public function testToggleSwitchButtonHtmlRenderingWithIcon()
    {
        $html = toggleSwitchButton()->icon('test-icon')->toHtml();
        $this->assertEquals(view('toggle-switch-button::components.toggle-switch-button', [
            'name'    => null,
            'checked' => false,
            'icon'    => 'test-icon',
            'label'   => null,
        ]), $html);
    }

    public function testToggleSwitchButtonHtmlRenderingWithLabel()
    {
        $html = toggleSwitchButton()->label('test-label')->toHtml();
        $this->assertEquals(view('toggle-switch-button::components.toggle-switch-button', [
            'name'    => null,
            'checked' => false,
            'icon'    => null,
            'label'   => 'test-label',
        ]), $html);
    }
}

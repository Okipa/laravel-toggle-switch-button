<?php

namespace Okipa\LaravelSettingsManagement\Test;

use Faker\Factory;
use Okipa\LaravelToggleSwitchButton\ToggleSwitchButtonServiceProvider;
use Orchestra\Testbench\TestCase;

abstract class ToggleSwitchButtonTestCase extends TestCase
{
    protected $faker;

    /**
     * Setup the test environment.
     */
    protected function setUp()
    {
        parent::setUp();
        $this->faker = Factory::create();
    }

    /**
     * @param \Illuminate\Foundation\Application $app
     *
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return [ToggleSwitchButtonServiceProvider::class];
    }
}

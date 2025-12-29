<?php

namespace ShadcnBlade\UI\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use ShadcnBlade\UI\ShadcnBladeServiceProvider;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            ShadcnBladeServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');
    }
}

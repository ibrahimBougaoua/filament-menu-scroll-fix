<?php

namespace FilamentMenuScrollFix\FilamentMenuScrollFix\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use FilamentMenuScrollFix\FilamentMenuScrollFix\FilamentMenuScrollFixServiceProvider;

class TestCase extends Orchestra
{
    protected function getPackageProviders($app)
    {
        return [
            FilamentMenuScrollFixServiceProvider::class,
        ];
    }
}

<?php

namespace FilamentMenuScrollFix\FilamentMenuScrollFix\Tests;

use FilamentMenuScrollFix\FilamentMenuScrollFix\FilamentMenuScrollFixServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function getPackageProviders($app)
    {
        return [
            FilamentMenuScrollFixServiceProvider::class,
        ];
    }
}

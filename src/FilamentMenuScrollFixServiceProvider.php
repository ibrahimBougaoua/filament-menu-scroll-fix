<?php

namespace FilamentMenuScrollFix\FilamentMenuScrollFix;

use Filament\PluginServiceProvider;
use Spatie\LaravelPackageTools\Package;

class FilamentMenuScrollFixServiceProvider extends PluginServiceProvider
{
    protected array $scripts = [
        'filament-menu-scroll-fix' => __DIR__ . '/../dist/script.js',
    ];

    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package->name('filament-menu-scroll-fix');
    }
}

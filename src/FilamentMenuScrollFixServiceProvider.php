<?php

namespace FilamentMenuScrollFix\FilamentMenuScrollFix;

use Filament\Support\Assets\Js;
use Filament\Support\Facades\FilamentAsset;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentMenuScrollFixServiceProvider extends PackageServiceProvider
{
    public static string $name = 'filament-menu-scroll-fix';

    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package->name(static::$name)
            ->hasAssets();

        FilamentAsset::register(
            assets: [
                Js::make(static::$name, __DIR__.'/../resources/dist/script.js'),
            ],
            package: 'ibrahimbougaoua/filament-menu-scroll-fix'
        );
    }
}

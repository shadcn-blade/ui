<?php

namespace ShadcnBlade\UI;

use ShadcnBlade\UI\Commands\AddCommand;
use ShadcnBlade\UI\Commands\InitCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class ShadcnBladeServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('shadcn-blade')
            ->hasConfigFile()
            ->hasViews()
            ->hasCommands([
                InitCommand::class,
                AddCommand::class,
            ]);
    }

}

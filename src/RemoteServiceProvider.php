<?php

namespace Quangvision\Remote;

use Quangvision\Remote\Commands\RemoteCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class RemoteServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel_remote')
            ->hasConfigFile()
            ->hasCommand(RemoteCommand::class);
    }
}

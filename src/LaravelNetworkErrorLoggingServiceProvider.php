<?php

namespace AdGoDev\LaravelNetworkErrorLogging;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use AdGoDev\LaravelNetworkErrorLogging\Commands\LaravelNetworkErrorLoggingCommand;

class LaravelNetworkErrorLoggingServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-nel')
            ->hasConfigFile('network-error-logging')
            ->hasMigration('create_laravel-nel_table')
            ->hasCommand(LaravelNetworkErrorLoggingCommand::class);
    }
}

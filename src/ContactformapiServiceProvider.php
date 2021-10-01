<?php

namespace EcoOnline\Contactformapi;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use EcoOnline\Contactformapi\Commands\ContactformapiCommand;

class ContactformapiServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('contactformapi')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_contactformapi_table')
            ->hasCommand(ContactformapiCommand::class);
    }
}

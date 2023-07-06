<?php

namespace Inisiatif\InisiatifDonor;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class InisiatifDonorServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('donor')
            ->hasConfigFile()
            ->hasMigration('create_donor_table');
    }
}

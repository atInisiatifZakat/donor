<?php

declare(strict_types=1);

namespace Inisiatif\InisiatifDonor;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

final class InisiatifDonorServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('donor')
            ->hasConfigFile()
            ->hasMigration('create_donor_table');
    }
}

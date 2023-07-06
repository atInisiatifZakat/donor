<?php

declare(strict_types=1);

namespace Inisiatif\InisiatifDonor\Tests;

use Orchestra\Testbench;
use Inisiatif\InisiatifDonor\InisiatifDonorServiceProvider;

abstract class TestCase extends Testbench\TestCase
{
    protected function getPackageProviders($app): array
    {
        return [
            InisiatifDonorServiceProvider::class,
        ];
    }
}

<?php

namespace Hak\GatewayMyanmar\Tests;

use Illuminate\Contracts\Config\Repository;
use Hak\GatewayMyanmar\GatewayServiceProvider;
use Orchestra\Testbench\TestCase as OrchestraTestBenchTestCase;


abstract class TestCase extends OrchestraTestBenchTestCase
{
    protected function getPackageProviders($app)
    {
        return [
            GatewayServiceProvider::class
        ];
    }
}

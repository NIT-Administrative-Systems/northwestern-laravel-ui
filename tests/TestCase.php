<?php

namespace Northwestern\SysDev\UI\Tests;

use Orchestra\Testbench\TestCase as BaseTestCase;
use Northwestern\SysDev\UI\Providers\NorthwesternUiServiceProvider;

abstract class TestCase extends BaseTestCase
{
    protected function getPackageProviders($application)
    {
        return [NorthwesternUiServiceProvider::class];
    }
}
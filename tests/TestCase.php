<?php

namespace ProwectCMS\ApiBuilder\Tests;

use Orchestra\Testbench\TestCase as BaseTestCase;
use Spatie\QueryBuilder\QueryBuilderServiceProvider;

class TestCase extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            QueryBuilderServiceProvider::class,
        ];
    }

    protected function getEnvironmentSetUp($app)
    {
        // perform environment setup
    }
}
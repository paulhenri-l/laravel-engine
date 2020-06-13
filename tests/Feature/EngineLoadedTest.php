<?php

namespace VendorStub\EngineNameStub\Tests\Feature;

use VendorStub\EngineNameStub\EngineNameStubServiceProvider;
use VendorStub\EngineNameStub\Tests\TestCase;

class EngineLoadedTest extends TestCase
{
    public function test_that_the_engine_is_loaded()
    {
        $providers = $this->app->getLoadedProviders();

        $engineIsLoaded = $providers[EngineNameStubServiceProvider::class] ?? false;

        $this->assertTrue($engineIsLoaded);
    }
}

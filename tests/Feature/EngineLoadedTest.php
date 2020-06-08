<?php

namespace Vendor\EngineName\Tests\Feature;

use Vendor\EngineName\EngineNameServiceProvider;
use Vendor\EngineName\Tests\TestCase;

class EngineLoadedTest extends TestCase
{
    public function test_that_the_engine_is_loaded()
    {
        $providers = $this->app->getLoadedProviders();

        $engineIsLoaded = $providers[EngineNameServiceProvider::class] ?? false;

        $this->assertTrue($engineIsLoaded);
    }
}

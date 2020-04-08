<?php

namespace Northwestern\SysDev\UI\Tests;

use Northwestern\SysDev\UI\Tests\TestCase;

class TestProviderWorks extends TestCase
{
    /** @test */
    public function config_loads()
    {
        // Makes sure the provider is working
        // It's not much, but we can't really test a huge heap of views?
        $this->assertNotNull(config('northwestern-theme.lockup'));
    }

    /** @test */
    public function renders()
    {
        // 
    }
}
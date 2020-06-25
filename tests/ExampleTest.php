<?php

namespace UiBuilder\Pwa\Tests;

use Orchestra\Testbench\TestCase;
use UiBuilder\Pwa\PwaServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [PwaServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}

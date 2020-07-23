<?php

namespace Waldekgraban\Carabiners\Tests\Unit;

use Waldekgraban\Carabiners\Carabiner\Carabiner;
use Waldekgraban\Carabiners\Tests\TestCase;

class CarabinerTest extends TestCase
{
    protected $carabiner;

    protected function setUp(): void
    {
        $carabiner_type = "B";
        $load           = 80;

        $carabiner = new Carabiner($carabiner_type, $load);
    }

    public function testCanInitializeByConstructor()
    {
        $this->assertInstanceOf(Carabiner::class, $this->carabiner);
    }

    protected function tearDown(): void
    {
        unset($this->carabiner);
    }
}

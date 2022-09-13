<?php

namespace Tests;

use Creational\Pool\CarPool;
use PHPUnit\Framework\TestCase;

final class PoolTest extends TestCase
{
    protected CarPool $carPool;

    protected function setUp(): void
    {
        parent::setUp();

        $this->carPool = new CarPool();
    }

    public function testItCanRentCar()
    {
        $this->carPool->rent();

        $this->assertEquals(1, $this->carPool->getBusyConut());
    }

    public function testItCanFreeCar()
    {
        $myCar = $this->carPool->rent();

        $this->carPool->free($myCar);

        $this->assertEquals(1, $this->carPool->getFreeConut());
    }
}

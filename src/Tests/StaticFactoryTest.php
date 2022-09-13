<?php

namespace Tests;

use Creational\StaticFactory\BenzCar;
use Creational\StaticFactory\BMWCar;
use Creational\StaticFactory\StaticFactory;
use PHPUnit\Framework\TestCase;

final class StaticFactoryTest extends TestCase
{
    public function testItCanCreateBMWCar()
    {
        $this->assertInstanceOf(BMWCar::class, StaticFactory::factory("BMW"));
    }

    public function testItCanCreateBenzCar()
    {
        $this->assertInstanceOf(BenzCar::class, StaticFactory::factory("Benz"));
    }
}

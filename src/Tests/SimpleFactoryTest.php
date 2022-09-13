<?php

namespace Tests;

use Creational\SimpleFactory\Car;
use Creational\SimpleFactory\CarFactory;
use PHPUnit\Framework\TestCase;

final class SimpleFactoryTest extends TestCase
{
    public function testItCanCreateCar()
    {
        $BMWCar = CarFactory::create("BMW");

        $this->assertInstanceOf(Car::class, $BMWCar);
    }
}

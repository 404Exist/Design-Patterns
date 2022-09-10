<?php

namespace Tests;

use Creational\AbstractFactory\BenzCar;
use Creational\AbstractFactory\BMWCar;
use Creational\AbstractFactory\CarAbstractFactory;
use PHPUnit\Framework\TestCase;

final class AbstractFactoryTest extends TestCase
{
    protected CarAbstractFactory $carFactory;

    protected function setUp(): void
    {
        parent::setUp();
        $this->carFactory = new CarAbstractFactory(200000);
    }

    public function testItCanCreateBMWCar()
    {
        $myCar = $this->carFactory->createBMWCar();
        $this->assertInstanceOf(BMWCar::class, $myCar);
    }

    public function testItCanCreateBenzCar()
    {
        $myCar = $this->carFactory->createBenzCar();
        $this->assertInstanceOf(BenzCar::class, $myCar);
    }
}

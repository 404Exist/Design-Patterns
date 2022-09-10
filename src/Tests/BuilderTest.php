<?php

namespace Tests;

use Creational\Builder\BenzCarBuilder;
use Creational\Builder\BMWCarBuilder;
use Creational\Builder\CarProducer;
use Creational\Builder\Models\BenzCar;
use Creational\Builder\Models\BMWCar;
use PHPUnit\Framework\TestCase;

final class BuilderTest extends TestCase
{
    public function testItCanProduceBMWCar()
    {
        $builder = new BMWCarBuilder();
        $carProducer = new CarProducer($builder);
        $myCar = $carProducer->produceCar();
        $this->assertInstanceOf(BMWCar::class, $myCar);
    }

    public function testItCanProduceBenzCar()
    {
        $builder = new BenzCarBuilder();
        $carProducer = new CarProducer($builder);
        $myCar = $carProducer->produceCar();
        $this->assertInstanceOf(BenzCar::class, $myCar);
    }
}

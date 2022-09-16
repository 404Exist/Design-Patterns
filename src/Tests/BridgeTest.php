<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Structural\Bridge\BenzCar;
use Structural\Bridge\BlueCar;
use Structural\Bridge\BMWCar;
use Structural\Bridge\RedCar;

final class BridgeTest extends TestCase
{
    public function testCanCreateBlueBMWCar()
    {
        $carColor = new BlueCar();
        $BMWCar = new BMWCar($carColor);

        $this->assertEquals("the type is BMW and the color is blue", $BMWCar->getProduct());
    }

    public function testCanCreateRedBenzCar()
    {
        $carColor = new RedCar();
        $BMWCar = new BenzCar($carColor);

        $this->assertEquals("the type is Benz and the color is red", $BMWCar->getProduct());
    }
}

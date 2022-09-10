<?php

namespace Tests;

use Creational\Factory\BenzBrand;
use Creational\Factory\BenzBrandFactory;
use Creational\Factory\BMWBrand;
use Creational\Factory\BMWBrandFactory;
use PHPUnit\Framework\TestCase;

final class FactoryTest extends TestCase
{
    public function testItCanBuildBMWCar()
    {
        $myBrand = BMWBrandFactory::buildBrand();
        $this->assertInstanceOf(BMWBrand::class, $myBrand);
    }

    public function testItCanBuildBenzCar()
    {
        $myBrand = BenzBrandFactory::buildBrand();
        $this->assertInstanceOf(BenzBrand::class, $myBrand);
    }
}

<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Structural\Adapter\Basic\Car;
use Structural\Adapter\Basic\TurboEngineAdapter;
use Structural\Adapter\Basic\NormalEngine;
use Structural\Adapter\Basic\TurboEngine;

final class AdapterTest extends TestCase
{
    public function testCanStartNormalEngine()
    {
        $engine = new NormalEngine();
        $car = new Car($engine);

        $this->assertEquals("normal engine start", $car->start());
    }

    public function testCanStartTurboEngine()
    {
        $engine = new TurboEngine();
        $adapter = new TurboEngineAdapter($engine);
        $car = new Car($adapter);

        $this->assertEquals("turbo engine start", $car->start());
    }
}

<?php

namespace Structural\Decorator;

class BluePaintingDecorator extends PaintingDecorator
{
    private const COLOR = "-blue-";

    public function paint(Car $car): Car
    {
        $car->setColor(self::COLOR);
        return parent::paint($car);
    }
}

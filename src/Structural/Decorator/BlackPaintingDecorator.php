<?php

namespace Structural\Decorator;

class BlackPaintingDecorator extends PaintingDecorator
{
    private const COLOR = "-black-";

    public function paint(Car $car): Car
    {
        $car->setColor(self::COLOR);
        return parent::paint($car);
    }
}

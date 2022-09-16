<?php

namespace Structural\Bridge;

class BMWCar extends Car
{
    public function __construct(private CarColor $carColor)
    {
    }

    public function getProduct(): string
    {
        return "the type is BMW and the color is {$this->carColor->getColor()}";
    }
}

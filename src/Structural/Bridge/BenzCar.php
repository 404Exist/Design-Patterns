<?php

namespace Structural\Bridge;

class BenzCar extends Car
{
    public function __construct(private CarColor $carColor)
    {
    }

    public function getProduct(): string
    {
        return "the type is Benz and the color is {$this->carColor->getColor()}";
    }
}

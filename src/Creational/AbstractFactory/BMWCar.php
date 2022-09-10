<?php

namespace Creational\AbstractFactory;

class BMWCar implements CarInterface
{
    public function __construct(private int $price)
    {
    }

    public function calculatePrice(): int
    {
        return $this->price + 120000;
    }
}

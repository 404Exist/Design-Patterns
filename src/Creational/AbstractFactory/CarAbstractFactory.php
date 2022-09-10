<?php

namespace Creational\AbstractFactory;

class CarAbstractFactory
{
    public function __construct(
        private int $price,
        private int $tax = 100000
    ) {
    }

    public function createBMWCar(): BMWCar
    {
        return new BMWCar($this->price);
    }

    public function createBenzCar(): BenzCar
    {
        return new BenzCar($this->price, $this->tax);
    }
}

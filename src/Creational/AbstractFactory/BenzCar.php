<?php

namespace Creational\AbstractFactory;

class BenzCar implements CarInterface
{
    public function __construct(
        private int $price,
        private int $tax
    ) {
    }

    public function calculatePrice(): int
    {
        return $this->price + $this->tax + 200000;
    }
}

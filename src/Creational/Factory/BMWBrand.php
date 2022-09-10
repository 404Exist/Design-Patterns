<?php

namespace Creational\Factory;

class BMWBrand implements CarBrandInterface
{
    public function createBrand(): string
    {
        return "BMW Brand";
    }
}

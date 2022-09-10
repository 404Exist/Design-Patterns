<?php

namespace Creational\Factory;

class BenzBrand implements CarBrandInterface
{
    public function createBrand(): string
    {
        return "Benz Brand";
    }
}

<?php

namespace Creational\Factory;

class BenzBrandFactory implements BrandFactory
{
    public static function buildBrand()
    {
        return new BenzBrand();
    }
}

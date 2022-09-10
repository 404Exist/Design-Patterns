<?php

namespace Creational\Factory;

class BMWBrandFactory implements BrandFactory
{
    public static function buildBrand()
    {
        return new BMWBrand();
    }
}

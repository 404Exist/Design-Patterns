<?php

namespace Creational\SimpleFactory;

class CarFactory
{
    public static function create(string $type): Car
    {
        return new Car($type);
    }
}

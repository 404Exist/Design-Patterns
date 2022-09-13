<?php

namespace Creational\StaticFactory;

class StaticFactory
{
    public static function factory(string $type): Car
    {
        $class = "\Creational\StaticFactory\\$type"."Car";

        return new $class();
    }
}

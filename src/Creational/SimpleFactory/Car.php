<?php

namespace Creational\SimpleFactory;

class Car
{
    public function __construct(
        private string $type,
    ) {
    }
}

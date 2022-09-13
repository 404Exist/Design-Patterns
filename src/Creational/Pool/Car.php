<?php

namespace Creational\Pool;

class Car
{
    public function id(): string
    {
        return spl_object_hash($this);
    }
}

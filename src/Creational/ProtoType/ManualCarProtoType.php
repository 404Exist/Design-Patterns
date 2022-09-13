<?php

namespace Creational\ProtoType;

class ManualCarProtoType extends AbstractCarProtoType
{
    protected string $model = "Manual";

    public function __clone()
    {
    }
}

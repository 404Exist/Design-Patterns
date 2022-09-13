<?php

namespace Creational\ProtoType;

abstract class AbstractCarProtoType
{
    protected string $model;
    private $flag;

    abstract public function __clone();

    public function getFlag(): string
    {
        return $this->flag;
    }

    public function setFlag($flag): void
    {
        $this->flag = $flag;
    }
}

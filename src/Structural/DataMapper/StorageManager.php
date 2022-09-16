<?php

namespace Structural\DataMapper;

class StorageManager
{
    private array $data = [];

    public function find(int $id)
    {
        return $this->data[$id] ?? [];
    }

    public function save(array $data)
    {
        return $this->data[$data["id"]] = $data;
    }
}

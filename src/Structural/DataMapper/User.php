<?php

namespace Structural\DataMapper;

class User
{
    private int $id;

    private string $name;

    private string $password;

    public function __construct(array $user = [])
    {
        array_map(fn($key)=>$this->$key = $user[$key], array_keys($user));
    }

    public static function instance(array $user = []): self
    {
        return new self($user);
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }
}

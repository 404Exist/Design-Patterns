<?php

namespace Structural\DependencyInjection;

class DBConfig
{
    public function __construct(
        private string $databaseName,
        private string $host = "localhost",
        private string $username = "root",
        private string $password = "",
        private string $port = "3306",
    ) {
    }

    public function getPort(): string
    {
        return $this->port;
    }

    public function getHost(): string
    {
        return $this->host;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function getDatabaseName(): string
    {
        return $this->databaseName;
    }
}

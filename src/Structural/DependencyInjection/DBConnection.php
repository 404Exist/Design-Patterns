<?php

namespace Structural\DependencyInjection;

class DBConnection
{
    public \PDO $pdo;
    public function __construct(private DBConfig $config)
    {
    }

    public function getDSN(): string
    {
        $dsn = "
            mysql:host={$this->config->getHost()};
            port={$this->config->getPort()};
            dbname={$this->config->getDatabaseName()};
        ";
        return preg_replace('/\s+/', '', $dsn);
    }

    public function connect()
    {
        $this->pdo = new \PDO($this->getDSN(), $this->config->getUsername(), $this->config->getPassword());

        $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }
}

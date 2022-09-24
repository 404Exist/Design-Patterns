<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Structural\DependencyInjection\DBConfig;
use Structural\DependencyInjection\DBConnection;

final class DependencyInjectionTest extends TestCase
{
    public function testCanGetDSNFromDBConnection()
    {
        $dbConfig = new DBConfig("DependencyInjection");
        $dbConnect = new DBConnection($dbConfig);

        $dsn = "mysql:host=localhost;port=3306;dbname=DependencyInjection;";

        $this->assertEquals($dsn, $dbConnect->getDSN());
    }
}

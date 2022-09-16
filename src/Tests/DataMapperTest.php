<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Structural\DataMapper\DataMapper;
use Structural\DataMapper\StorageManager;
use Structural\DataMapper\User;

final class DataMapperTest extends TestCase
{
    public function testCanSaveAndGetUser()
    {
        $user = User::instance()->setId(1)->setName("admin")->setPassword("123");

        $dataMapper = new DataMapper(new StorageManager());

        $dataMapper->create($user);

        $this->assertEquals($user, $dataMapper->findById(1));
    }
}

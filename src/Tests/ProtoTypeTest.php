<?php

namespace Tests;

use Creational\ProtoType\AutomaticCarProtoType;
use Creational\ProtoType\ManualCarProtoType;
use PHPUnit\Framework\TestCase;

final class ProtoTypeTest extends TestCase
{
    public function testItCanCreateAutomaticCarsWithClone()
    {
        $auto = new AutomaticCarProtoType();

        $this->assertInstanceOf(AutomaticCarProtoType::class, clone $auto);
    }

    public function testItCanCreateManualCarsWithClone()
    {
        $manual = new ManualCarProtoType();

        $this->assertInstanceOf(ManualCarProtoType::class, clone $manual);
    }
}

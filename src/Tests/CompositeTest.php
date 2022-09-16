<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Structural\Composite\BigBox;
use Structural\Composite\GiftBox;
use Structural\Composite\SimpleBox;

final class CompositeTest extends TestCase
{
    public function testCanGetTotalPriceOfBigBox()
    {
        $package = new BigBox();

        $package->add(new SimpleBox(300))
            ->add($item = new SimpleBox(400))
            ->add(new SimpleBox(200))
            ->remove($item)
            ->add(new GiftBox(100, 50));

        $this->assertEquals(650, $package->getPrice());
    }
}

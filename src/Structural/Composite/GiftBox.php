<?php

namespace Structural\Composite;

class GiftBox implements ProductInterface, GiftInterface
{
    public function __construct(private int $price, private int $theGiftPrice)
    {
    }

    public function getPrice(): int
    {
        return $this->giftPrice() + $this->price;
    }

    public function giftPrice(): int
    {
        return $this->theGiftPrice;
    }
}

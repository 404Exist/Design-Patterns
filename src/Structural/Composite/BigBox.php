<?php

namespace Structural\Composite;

class BigBox implements ProductInterface, ActionsInterface
{
    public function getPrice(): int
    {
        $totalPrice = 0;

        foreach ($this->products as $product) {
            $totalPrice += $product->getPrice();
        }

        return $totalPrice;
    }

    public function add(ProductInterface $product): self
    {
        $this->products[] = $product;

        return $this;
    }

    public function remove(ProductInterface $product): self
    {
        $this->products = array_filter($this->products, fn($item) => $item != $product ? $item : null);

        return $this;
    }
}

<?php

namespace Structural\Composite;

interface ActionsInterface
{
    public function add(ProductInterface $product): self;
    public function remove(ProductInterface $product): self;
}

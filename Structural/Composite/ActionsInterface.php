<?php


namespace Structural\Composite;


interface ActionsInterface
{
    public function add(ProductInterface $product);
    public function remove(ProductInterface $product);
}
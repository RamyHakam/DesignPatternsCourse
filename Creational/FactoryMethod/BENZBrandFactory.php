<?php


namespace Creational\FactoryMethod;


class BENZBrandFactory implements  BrandFactory
{
    public function BuildBrand()
    {
        // TODO: Implement BuildBrand() method.
        return new BENZBrand();
    }

}
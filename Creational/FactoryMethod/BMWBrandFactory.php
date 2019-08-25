<?php


namespace Creational\FactoryMethod;


class BMWBrandFactory  implements BrandFactory
{
    public function BuildBrand()
    {
        // TODO: Implement BuildBrand() method.
        return new BMWBrand();
    }

}
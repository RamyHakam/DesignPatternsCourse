<?php


namespace Creational\FactoryMethod;


class BMWBrand implements  CarBrandInterface
{
    public function createBrand()
    {
        return "BMW Brand";
    }

}
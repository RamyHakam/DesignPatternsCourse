<?php


namespace Tests;


use Creational\FactoryMethod\BENZBrand;
use Creational\FactoryMethod\BENZBrandFactory;
use Creational\FactoryMethod\BMWBrand;
use Creational\FactoryMethod\BMWBrandFactory;
use PHPUnit\Framework\TestCase;

class FactoryMethodTest extends  TestCase
{
    public  function testCanBuildBMWBrand(){
        $brandFactory = new BMWBrandFactory();
        $myBrand = $brandFactory->BuildBrand();

        $this->assertInstanceOf( BMWBrand::class ,$myBrand);
    }

    public  function testCanBuildBENZBrand(){
        $brandFactory = new BENZBrandFactory();
        $myBrand = $brandFactory->BuildBrand();

        $this->assertInstanceOf( BENZBrand::class ,$myBrand);
    }

}
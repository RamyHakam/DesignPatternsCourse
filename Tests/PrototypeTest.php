<?php


namespace Tests;


use Creational\ProtoType\AutomaticCarProtoType;
use Creational\ProtoType\ManualCarProtoType;
use PHPUnit\Framework\TestCase;

class PrototypeTest extends  TestCase
{

    public  function testCanCreateAutomaticCarsWithClone()
    {
        $automaticProtoTypeCar = new AutomaticCarProtoType();
        for( $index = 1 ; $index <=10 ; $index ++){
            $newCar = clone $automaticProtoTypeCar;
            $this->assertInstanceOf( AutomaticCarProtoType::class, $newCar);
        }
    }

    public  function testCanCreateManualCarsWithClone()
    {
        $ManualProtoTypeCar = new ManualCarProtoType();
        for( $index = 1 ; $index <=10 ; $index ++){
            $newCar = clone $ManualProtoTypeCar;
            $this->assertInstanceOf( ManualCarProtoType::class, $newCar);
        }
    }


}
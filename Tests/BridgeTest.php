<?php


namespace Tests;


use PHPUnit\Framework\TestCase;
use Structural\Bridge\BENZCar;
use Structural\Bridge\BlueCar;
use Structural\Bridge\BMWCar;
use Structural\Bridge\RedCar;

class BridgeTest extends TestCase
{
    public function testCanCreateBlueBMWCar()
    {
        $carColor = new BlueCar();
        $bmwCar = new BMWCar($carColor);

        $this->assertEquals('the car type is BMW and the care color is blue',$bmwCar->getProduct());
    }

    public function testCanCreateRedBMWCar()
    {
        $carColor = new RedCar();
        $bmwCar = new BMWCar($carColor);

        $this->assertEquals('the car type is BMW and the care color is red',$bmwCar->getProduct());
    }

    public function testCanCreateBlueBENZCar()
    {
        $carColor = new BlueCar();
        $car = new BENZCar($carColor);

        $this->assertEquals('the car type is BENZ and the care color is blue',$car->getProduct());
    }

    public function testCanCreateRedBENZCar()
    {
        $carColor = new RedCar();
        $car = new BENZCar($carColor);

        $this->assertEquals('the car type is BENZ and the care color is red',$car->getProduct());
    }

}
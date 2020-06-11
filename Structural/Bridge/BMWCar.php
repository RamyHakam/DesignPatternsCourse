<?php


namespace Structural\Bridge;


class BMWCar extends Car
{
    public function __construct(CarColor $carColor)
    {
        parent::__construct($carColor);
    }

    function getProduct()
    {
        return sprintf('the car type is %s and the care color is %s','BMW',$this->carColor->getColor());
    }
}
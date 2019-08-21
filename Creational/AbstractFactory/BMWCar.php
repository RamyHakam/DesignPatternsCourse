<?php


namespace Creational\AbstractFactory;


class BMWCar implements CarInterface
{

    private $price;

    public function __construct($price)
    {
        $this->price =$price;
    }

    public function calculatePrice()
    {
        // TODO: Implement calculatePrice() method.
        return $this->price + 120000;
    }

}
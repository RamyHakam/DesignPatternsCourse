<?php


namespace Structural\Bridge;


abstract class Car
{
    /**
     * @var CarColor
     */
    protected $carColor;

    public function __construct(CarColor  $carColor)
    {
        $this->carColor = $carColor;
    }

    abstract function getProduct();
}
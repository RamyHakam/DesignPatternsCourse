<?php


namespace Structural\Decorator;


class RedPainitngDecorator extends PaitingDecorator
{
    private const COLOR = '-red-';

    public function paint(Car $car)
    {
        $car->setColor(self::COLOR);
        return parent::paint($car);
    }
}
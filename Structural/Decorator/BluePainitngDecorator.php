<?php


namespace Structural\Decorator;


class BluePainitngDecorator extends PaitingDecorator
{
    private const COLOR = '-blue-';

    public function paint(Car $car)
    {
        $car->setColor(self::COLOR);
        return parent::paint($car);
    }

}
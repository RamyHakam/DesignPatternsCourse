<?php


namespace Structural\Decorator;


class BlackPainitngDecorator extends PaitingDecorator
{
    private const COLOR = '-black-';

    public function paint(Car $car)
    {
        $car->setColor(self::COLOR);
        return parent::paint($car);
    }
}
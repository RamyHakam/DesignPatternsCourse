<?php

namespace  Creational\StaticFactory;


class StaticFactory
{
    public static function factory(string $type)
    {
        if ($type === 'BMW') {
            return new BMWCar();
        }

        if($type === 'BENZ') {
            return new BENZCar();
        }
        return null;
    }
}
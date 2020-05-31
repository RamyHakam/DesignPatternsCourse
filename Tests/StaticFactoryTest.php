<?php


namespace Tests;


use Creational\StaticFactory;
use PHPUnit\Framework\TestCase;

class StaticFactoryTest extends  TestCase
{
    public function testCanCreateBMWCar()
    {
        $this->assertInstanceOf(StaticFactory\BMWCar::class,StaticFactory\StaticFactory::factory('BMW'));
    }

    public function testCanCreateBENZCar()
    {
        $this->assertInstanceOf(StaticFactory\BENZCar::class,StaticFactory\StaticFactory::factory('BENZ'));
    }
}
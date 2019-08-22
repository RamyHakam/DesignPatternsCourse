<?php


namespace Creational\Builder;

use Creational\Builder\Models\Car;
use Creational\Builder\Models\BENZCar;



class BENZCarBuilder implements CarBuilderInterface
{

    /**
     * @var Car $type
     */
    private  $type;

    public function createCar()
    {
        // TODO: Implement createCar() method.
        $this->type = new BENZCar();
    }

    public function addBody()
    {
        // TODO: Implement addBody() method.
        $this->type->setPart('BODY','body');
    }
    public function addDoors()
    {
        // TODO: Implement addDoors() method.
        $this->type->setPart('DOOR','door');
    }
    public function addEngine()
    {
        // TODO: Implement addEngine() method.
        $this->type->setPart('ENGINE','engine');
    }
    public function addWheel()
    {
        // TODO: Implement addWheel() method.
        $this->type->setPart('WHEEL','wheel');
    }
    public function getCar() :Car
    {
        // TODO: Implement getCar() method.
        return $this->type;
    }
}
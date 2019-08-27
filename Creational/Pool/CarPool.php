<?php


namespace Creational\Pool;


class CarPool
{
    /**
     * @var Car []
     */
    private  $freeCars =[];
    /**
     * @var Car []
     */
    private  $busyCars = [];

    public  function rentCar()
    {
        if(count($this->freeCars)==0)
        {
         $car = new Car();
        }
        else{
            $car = array_pop($this->freeCars);
        }
        $this->busyCars[spl_object_hash($car)] = $car;

        return $car;

    }

    public  function  freeCar( Car $car)
    {
        $carId = spl_object_hash($car);

        if(isset($this->busyCars[$carId])){
            unset($this->busyCars[$carId]);
            $this->freeCars[$carId] = $car;
        }

    }
    public  function  getReport() :int
    {
        return count($this->freeCars) + count($this->busyCars);
    }

    public  function  getFreeCount() {
        return count ($this->freeCars);
    }

}
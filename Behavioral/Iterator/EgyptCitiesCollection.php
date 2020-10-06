<?php


namespace Behavioral\Iterator;


use Exception;
use IteratorAggregate;
use Traversable;

class EgyptCitiesCollection implements IteratorAggregate
{
    private $egyptCities = [];

    public function addCity(City $city)
    {
        $this->egyptCities [] = $city;
        return $this;
    }

    public function removeCity(string $name)
    {
        foreach ($this->egyptCities as $key => $city)
        {
            if($city->getName() === $name)
            {
                unset($this->egyptCities[$key]);
            }
        }
    }

    /**
     * @return array
     */
    public function getEgyptCities(): array
    {
        return $this->egyptCities;
    }

    public function getIterator()
    {
       return new OddIterator($this);
    }

    public function getEvenIterator()
    {
        return new EvenIterator($this);
    }

    public function getAreaIterator()
    {
        return new AreaIterator($this);
    }
}
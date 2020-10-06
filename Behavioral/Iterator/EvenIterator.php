<?php


namespace Behavioral\Iterator;


use Iterator;

class EvenIterator implements Iterator
{
    /**
     * @var EgyptCitiesCollection
     */
    private EgyptCitiesCollection $citiesCollection;

    private  $index = 0;

    public function __construct(EgyptCitiesCollection $citiesCollection)
    {
        $this->citiesCollection = $citiesCollection;
    }

    public function current()
    {
        return $this->citiesCollection->getEgyptCities()[$this->index];
    }

    public function next()
    {
        $this->index = $this->nextEven();
    }

    public function key()
    {
        return $this->index;
    }

    public function valid()
    {
        return isset($this->citiesCollection->getEgyptCities()[$this->index]);
    }

    public function rewind()
    {
        $this->index = 0;
    }

    private function nextEven()
    {
        for ($item = 0, $itemMax = count($this->citiesCollection->getEgyptCities()); $item < $itemMax; $item++)
        {
            if(++$this->index % 2 === 0)
            {
                return $this->index;
                break;
            }
            return  ++$this->index;
        }
    }

}
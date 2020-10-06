<?php


namespace Behavioral\Iterator;


class City
{

    private string $name;
    private int $area;

    public function __construct(string $name, int $area)
    {
        $this->name = $name;
        $this->area = $area;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getArea(): int
    {
        return $this->area;
    }
}
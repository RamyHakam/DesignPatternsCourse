<?php


namespace Creational\SimpleFactory;


class Car
{
    /**
     * @var string
     */
    private $type;

    public function __construct(string $type)
    {
        $this->type = $type;
    }
}
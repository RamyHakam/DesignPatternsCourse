<?php


namespace Structural\Adapter;


class Car
{
    /**
     * @var EngineInterface
     */
    private $engine;

    public function __construct(EngineInterface $engine)
    {
        $this->engine = $engine;
    }

    public function start()
    {
       return $this->engine->startEngine();
    }
}
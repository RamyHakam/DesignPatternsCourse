<?php


namespace Structural\Adapter;


class EngineAdapter implements EngineInterface
{
    /**
     * @var TurboEngine
     */
    private $engine;

    public function __construct(TurboEngine $engine)
    {
        $this->engine = $engine;
    }

    public function startEngine()
    {
       return $this->engine->startTurbo();
    }
}
<?php


namespace Structural\Adapter;


class NormalEngine implements EngineInterface
{
    public function startEngine()
    {
        return 'normal Engine start';
    }
}
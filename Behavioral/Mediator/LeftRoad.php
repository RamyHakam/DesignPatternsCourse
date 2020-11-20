<?php


namespace Behavioral\Mediator;


class LeftRoad extends Road
{
    const ID = 'LEFT';
    function getId(): string
    {
        return  self::ID;
    }
}
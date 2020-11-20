<?php


namespace Behavioral\Mediator;


class RightRoad extends Road
{
    const ID = 'RIGHT';
    function getId(): string
    {
        return  self::ID;
    }
}
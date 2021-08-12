<?php

namespace Behavioral\Visitor;

interface CityInterface
{
    public function accept(VisitorInterface  $visitor): void;
}
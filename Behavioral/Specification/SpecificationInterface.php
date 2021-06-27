<?php


namespace Behavioral\Specification;


interface SpecificationInterface
{
    public function isSatisfiedBy(CV $cv) :bool;
}
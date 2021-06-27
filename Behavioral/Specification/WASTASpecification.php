<?php


namespace Behavioral\Specification;


class WASTASpecification implements SpecificationInterface
{
    public function isSatisfiedBy(CV $cv): bool
    {
        return  true;
    }
}
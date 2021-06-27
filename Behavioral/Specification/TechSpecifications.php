<?php


namespace Behavioral\Specification;


class TechSpecifications implements SpecificationInterface
{
    private string $tech;

    public function __construct(string $tech)
    {
        $this->tech = $tech;
    }

    public function isSatisfiedBy(Cv $cv): bool
    {
        return in_array($this->tech, $cv->getTech(), true);
    }
}
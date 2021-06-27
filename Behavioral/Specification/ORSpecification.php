<?php


namespace Behavioral\Specification;


class ORSpecification implements SpecificationInterface
{
    private array $specs;

    public function __construct( SpecificationInterface ... $specs)
    {
        $this->specs = $specs;
    }

    public function isSatisfiedBy(Cv $cv): bool
    {
        foreach ($this->specs as $spec)
        {
            if($spec->isSatisfiedBy($cv)){
                return true;
            }
        }
        return  false;
    }
}
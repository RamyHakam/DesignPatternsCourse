<?php


namespace Behavioral\Specification;


class LanguageSpecification implements SpecificationInterface
{
    private string $language;

    public function __construct(string $language)
    {
        $this->language = $language;
    }

    public function isSatisfiedBy(CV $cv): bool
    {
        return in_array($this->language, $cv->getLanguages(), true);
    }
}
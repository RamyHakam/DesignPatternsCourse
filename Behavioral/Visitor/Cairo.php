<?php

namespace Behavioral\Visitor;

class Cairo implements CityInterface
{
    public function accept(VisitorInterface $visitor): void
    {
        $visitor->visitCairo($this);
    }

    public function allowToEnter(string $passport): bool
    {
        return in_array($passport,['EG','UK','DE']);
    }

    public function visitPyramids(): void
    {
        echo 'pyramids';
    }
}
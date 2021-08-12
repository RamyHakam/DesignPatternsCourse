<?php

namespace Behavioral\Visitor;

class Sydney implements CityInterface
{

    public function accept(VisitorInterface $visitor): void
    {
        $visitor->visitSydney($this);
    }

    public function calculateBudget(int $amount): bool
    {
        return $amount > 5000 ;
    }

    public function bookInOpera(): void
    {
        echo 'opera';
    }
}
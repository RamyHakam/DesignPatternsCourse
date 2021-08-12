<?php

namespace Behavioral\Visitor;

class London implements CityInterface
{

    public function accept(VisitorInterface $visitor): void
    {
        $visitor->visitLondon($this);
    }

    public function allowToVisit(string $passport ) :bool
    {
        return  in_array($passport,['UK','FE','DE']);
    }

    public function goToBigBen(): void
    {
        echo 'Big bin';
    }
}
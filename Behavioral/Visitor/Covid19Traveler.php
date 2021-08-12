<?php

namespace Behavioral\Visitor;

class Covid19Traveler implements VisitorInterface
{
    private Traveler $traveler;
    private bool $pcr;
    private bool $covidPass;

    public function __construct(Traveler $traveler, bool $pcr, bool $covidPass)
    {
        $this->traveler = $traveler;
        $this->pcr = $pcr;
        $this->covidPass = $covidPass;
    }

    public function visitCairo(Cairo $cairo)
    {
        if($this->pcr)
        {
            $this->traveler->visitCairo($cairo);
        }
    }

    public function visitLondon(London $landon)
    {
        if($this->covidPass)
        {
            $this->traveler->visitLondon($landon);
        }
    }

    public function visitSydney(Sydney $sydney)
    {
        if($this->covidPass)
        {
            $this->traveler->visitSydney($sydney);
        }
    }

    public function visitBali(Bali $bali)
    {
        if($this->pcr && $this->covidPass)
        {
            $this->traveler->visitBali($bali);
        }
    }

    /**
     * @return Traveler
     */
    public function getTraveler(): Traveler
    {
        return $this->traveler;
    }
}
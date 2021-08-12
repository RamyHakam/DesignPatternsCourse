<?php

namespace Behavioral\Visitor;

class Traveler implements VisitorInterface
{
    private string $passport;
    private bool $hotelBooked;
    private int $budget;
    private array $tripHistory = [];


    public function __construct( string $passport, bool $hotelBooked, int $budget)
    {
        $this->passport = $passport;
        $this->hotelBooked = $hotelBooked;
        $this->budget = $budget;
    }

    public function visitCairo(Cairo $cairo)
    {
        $this->tripHistory[] = 'Cairo';
        $cairo->visitPyramids();
    }

    public function visitLondon(London $landon)
    {
        if($landon->allowToVisit($this->passport))
        {
            $this->tripHistory[] = 'London';
            $landon->goToBigBen();
        }
    }

    public function visitSydney(Sydney $sydney)
    {
        if($sydney->calculateBudget($this->budget))
        {
            $this->tripHistory[] = 'Sydney';
            $sydney->bookInOpera();
        }
    }

    public function visitBali(Bali $bali)
    {
        if($bali->validateVisit($this->passport,$this->hotelBooked))
        {
            $this->tripHistory[] = 'Bali';
            $bali->enjoyKutaBeach();
        }
    }

    /**
     * @return array
     */
    public function getTripHistory(): array
    {
        return $this->tripHistory;
    }
}
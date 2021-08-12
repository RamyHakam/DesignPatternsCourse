<?php

namespace Tests;

use Behavioral\Visitor\Bali;
use Behavioral\Visitor\Cairo;
use Behavioral\Visitor\Covid19Traveler;
use Behavioral\Visitor\London;
use Behavioral\Visitor\Sydney;
use Behavioral\Visitor\Traveler;
use PHPUnit\Framework\TestCase;

class VisitorTest extends TestCase
{
    private  array  $tripPlan;

    protected function setUp(): void
    {
        $this->tripPlan[] = new Cairo();
        $this->tripPlan[] = new Sydney();
        $this->tripPlan[] = new London();
        $this->tripPlan[] = new Bali();
    }

    public function testCanEGPassTravelSomeCities()
    {
        $traveler = new Traveler('EG',true,500);

        foreach ($this->tripPlan as $tripCity)
        {
            $tripCity->accept($traveler);
        }

        self::assertEquals(['Cairo','Bali'],$traveler->getTripHistory());
    }

    public function testCanEGPassTravelAllCities()
    {
        $traveler = new Traveler('UK',true,50000);

        foreach ($this->tripPlan as $tripCity)
        {
            $tripCity->accept($traveler);
        }

        self::assertEquals(['Cairo','Sydney','London','Bali'],$traveler->getTripHistory());
    }

    public function testCanEGPassTravelSomeCitiesAfterCovid()
    {
        $traveler = new Traveler('EG',true,500);
        $covidTraveler = new Covid19Traveler($traveler,true,false);

        foreach ($this->tripPlan as $tripCity)
        {
            $tripCity->accept($covidTraveler);
        }

        self::assertEquals(['Cairo'],$covidTraveler->getTraveler()->getTripHistory());
    }

    public function testCanEGPassTravelAllCitiesAfterCovid()
    {
        $traveler = new Traveler('UK',true,50000);
        $covidTraveler = new Covid19Traveler($traveler,true,true);

        foreach ($this->tripPlan as $tripCity)
        {
            $tripCity->accept($covidTraveler);
        }

        self::assertEquals(['Cairo','Sydney','London','Bali'],$covidTraveler->getTraveler()->getTripHistory());
    }

}
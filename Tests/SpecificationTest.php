<?php

namespace Tests;

use Behavioral\Specification\AgeSpecification;
use Behavioral\Specification\ANDSpecification;
use Behavioral\Specification\CV;
use Behavioral\Specification\LanguageSpecification;
use Behavioral\Specification\ORSpecification;
use Behavioral\Specification\SkillSpecifications;
use Behavioral\Specification\TechSpecifications;
use Behavioral\Specification\WASTASpecification;
use Behavioral\Specification\YearOfExPSpecification;
use PHPUnit\Framework\TestCase;

class SpecificationTest extends TestCase
{
    public function testCanMatchCvWithSeniorSpecifications()
    {
        $cv = new CV('6', ['problem-solving'], 30, ['git', 'docker', 'ci/cd'], ['php', 'java', 'node']);

        self::assertTrue($this->getseniorBackEndDevSpecification()->isSatisfiedBy($cv));
    }

    private function getseniorBackEndDevSpecification()
    {
        $yearOfEx = new YearOfExPSpecification(5);
        $ageSpec = new AgeSpecification(25, 30);
        $phpSpec = new LanguageSpecification('php');
        $javaSpec = new LanguageSpecification('java');
        $gitSpec = new TechSpecifications('git');
        $dockerSpec = new TechSpecifications('docker');
        $psSpec = new SkillSpecifications('problem-solving');

        $seniorSpecifications = new ANDSpecification(
            $yearOfEx,
            $phpSpec,
            $ageSpec,
            $javaSpec,
            $gitSpec,
            $dockerSpec,
            $psSpec,
        );
        return $seniorSpecifications;
    }

    public function testCanMatchCvWithJuniorSpecifications()
    {
        $cv = new CV('3', ['problem-solving'], 24, ['git'], ['java']);

        self::assertTrue($this->getjuniorBackEndDevSpecification()->isSatisfiedBy($cv));
    }

    private function getjuniorBackEndDevSpecification()
    {
        $yearOfEx = new YearOfExPSpecification(2);
        $phpSpec = new LanguageSpecification('php'); //OR
        $javaSpec = new LanguageSpecification('java');
        $gitSpec = new TechSpecifications('git');
        $ageSpec = new AgeSpecification(20, 25);


        $juniorSpecifications = new ANDSpecification(
            $yearOfEx,
            $ageSpec,
            $gitSpec,
            new ORSpecification($phpSpec, $javaSpec),
        );
        return $juniorSpecifications;
    }

    private function getjuniorBackEndDevSpecificationWITHWASTA()
    {
        $yearOfEx = new YearOfExPSpecification(2);
        $phpSpec = new LanguageSpecification('php'); //OR
        $javaSpec = new LanguageSpecification('java');
        $gitSpec = new TechSpecifications('git');
        $ageSpec = new AgeSpecification(20, 25);
        $wastaSpec = new WASTASpecification();


        $juniorSpecifications = new ANDSpecification(
            $yearOfEx,
            $ageSpec,
            $gitSpec,
            new ORSpecification($phpSpec, $javaSpec),
        );
        return  new ORSpecification($juniorSpecifications,$wastaSpec);
    }

    public function testCanNOTMatchCvWithSeniorSpecificationsIFAgeIsNotSatisfied()
    {
        $cv = new CV('6', ['problem-solving'], 36, ['git', 'docker', 'ci/cd'], ['php', 'java', 'node']);

        self::assertFalse($this->getseniorBackEndDevSpecification()->isSatisfiedBy($cv));
    }

    public function testCanNOTMatchCvWithSeniorSpecificationsIFSkillsIsNotSatisfied()
    {
        $cv = new CV('6', [], 34, ['git', 'docker', 'ci/cd'], ['php', 'java', 'node']);

        self::assertFalse($this->getseniorBackEndDevSpecification()->isSatisfiedBy($cv));
    }

    public function testCanNotMatchCvWithJuniorSpecificationsIfNoLangauges()
    {
        $cv = new CV('3', ['problem-solving'], 24, ['git'], ['node']);

        self::assertFalse($this->getjuniorBackEndDevSpecification()->isSatisfiedBy($cv));
    }

    public function testCanMatchCvWithJuniorSpecificationsWithWasta()
    {
        $cv = new CV('-2', [], 44, [''], ['forten']);

        self::asserttrue($this->getjuniorBackEndDevSpecificationWITHWASTA()->isSatisfiedBy($cv));
    }
}
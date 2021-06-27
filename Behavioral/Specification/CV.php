<?php


namespace Behavioral\Specification;


class CV
{
    private int $yOfEx;
    private array $skills;
    private int $age;
    private array $tech;
    private array $languages;

    public function __construct(int $yOfEx, array $skills, int $age, array $tech, array $languages)
    {
        $this->yOfEx = $yOfEx;
        $this->skills = $skills;
        $this->age = $age;
        $this->tech = $tech;
        $this->languages = $languages;
    }

    /**
     * @return int
     */
    public function getYOfEx(): int
    {
        return $this->yOfEx;
    }

    /**
     * @return array
     */
    public function getSkills(): array
    {
        return $this->skills;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @return array
     */
    public function getTech(): array
    {
        return $this->tech;
    }

    /**
     * @return array
     */
    public function getLanguages(): array
    {
        return $this->languages;
    }
}
<?php


namespace Structural\Facade\ConverterLib;


class Photo
{
    private string $type = '-web-';

    public function getType()
    {
        return $this->type;

    }
    /**
     * @param mixed $type
     */
    public function setType($type): void
    {
        $this->type = $type;
    }

    public function __toString()
    {
        return $this->type;
    }
}
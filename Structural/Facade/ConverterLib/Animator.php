<?php


namespace Structural\Facade\ConverterLib;


class Animator
{
    public function animatePhoto(Photo $photo)
    {
        return $photo . '-animate';
    }

}
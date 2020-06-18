<?php


namespace Structural\Facade\ConverterLib;


class JPGConverter
{
    public function convertToJPG(Photo $photo)
    {
        $photo->setType($photo . '-JPG');
        return $photo;
    }
}
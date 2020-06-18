<?php


namespace Structural\Facade;


use Structural\Facade\ConverterLib\Animator;
use Structural\Facade\ConverterLib\ColorCorrection;
use Structural\Facade\ConverterLib\GIFConverter;
use Structural\Facade\ConverterLib\JPGConverter;
use Structural\Facade\ConverterLib\Photo;

class ConverterFacade
{
   public function GIFConvert(Photo $photo)
   {
       $animator = new Animator();
       $gifConverter = new GIFConverter($animator);
       return $gifConverter->convertToGIF($photo);
   }

   public function JPGConvert(Photo $photo)
   {
       $colorCorrection = new ColorCorrection();
       $photo->setType($colorCorrection->correctColor($photo));
       $jpgConverter = new JPGConverter();
       return $jpgConverter->convertToJPG($photo);
   }
}
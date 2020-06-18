<?php


namespace Structural\Facade\ConverterLib;


class GIFConverter
{
    /**
     * @var Animator
     */
    private $animator;

    public function __construct(Animator $animator)
    {
        $this->animator = $animator;
    }

    public function convertToGIF(Photo $photo)
    {
        $type = $photo->getType() . '-GIF';
        $photo->setType($type);
        $photo->setType($this->animator->animatePhoto($photo));
        return $photo;
    }
}
<?php


namespace Tests;


use PHPUnit\Framework\TestCase;
use Structural\Facade\ConverterFacade;
use Structural\Facade\ConverterLib\Photo;

class FacadeTest extends  TestCase
{
    private $facade;
    protected function setUp() :void
    {
        $this->facade = new ConverterFacade();

    }

    public function testCanConvertToGIF()
    {
        $photo = new Photo();
        $this->facade->GIFConvert($photo);

        $this->assertEquals('-web--GIF-animate',$photo->getType());
    }

    public function testCanConverttoJPG()
    {
        $photo = new Photo();
        $this->facade->JPGConvert($photo);
        $this->assertEquals('-web-color_correction-JPG',$photo->getType());
    }
}
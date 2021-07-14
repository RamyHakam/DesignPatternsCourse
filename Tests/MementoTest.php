<?php

namespace Tests;


use Behavioral\Memento\CareTaker;
use Behavioral\Memento\Originator;
use PHPUnit\Framework\TestCase;

class MementoTest extends TestCase

{
    private $originator;
    private $careTaker;
    protected function setUp() :void
    {
        $this->originator = new Originator();
        $this->careTaker = new CareTaker($this->originator);
    }

    public function testCanSaveCodeFileUpdates()
    {
        $this->originator->addNewEcho();
        $this->originator->addNewVar();

        $this->careTaker->commit();

      $codeFile =  $this->originator->getCodeFile();

      $this->assertEquals(3,count($codeFile->getLines()));
    }

    public function testCanRestoreCodeFile()
    {
        $this->originator->addNewEcho();
        $this->originator->addNewVar();
        $this->careTaker->commit();
        $this->originator->addNewEcho();
        $this->originator->addNewEcho();

        $this->careTaker->rollBack();

        $codeFile =  $this->originator->getCodeFile();

        $this->assertEquals(3,count($codeFile->getLines()));
    }


}
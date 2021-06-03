<?php


namespace Behavioral\Memento;


class Originator
{
    private $codeFile;

    public function __construct()
    {
        $this->codeFile = new CodeFile();
    }
    public function addNewEcho()
    {
        $this->codeFile->addNewLine("Echo 'TEST New Line ';");
    }

    public function addNewVar()
    {
        $this->codeFile->addNewLine('$X = 15;');
    }

    public function save() : MementoInterface
    {
        return new ConcreteMemento( clone $this->codeFile);
    }

    public function CtrlZ(MementoInterface $memento)
    {
        $this->codeFile = $memento->getSnapShot();
    }

    public function getCodeFile() : CodeFile
    {
        return $this->codeFile;
    }




}
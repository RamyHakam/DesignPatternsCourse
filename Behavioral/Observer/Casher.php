<?php


namespace Behavioral\Observer;


use SplObserver;
use SplSubject;

class Casher implements SplObserver
{
    private $state;

    public function update(SplSubject $subject)
    {
        /** @var Restaurant $subject */
        $this->state = sprintf( "Casher is ready for order number %s",$subject->getOrderNumber());
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }
}
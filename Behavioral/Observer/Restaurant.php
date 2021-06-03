<?php


namespace Behavioral\Observer;


use SplObjectStorage;
use SplObserver;
use SplSubject;

class Restaurant implements SplSubject
{
    private $observers;

    private $orderNumber = 0;

    public function __construct()
    {
        $this->observers = new SplObjectStorage();
    }

    public function attach(SplObserver $observer)
    {
        $this->observers->attach($observer);
    }

    public function detach(SplObserver $observer)
    {
        $this->observers->detach($observer);
    }

    public function notify()
    {
        /* @var SplObserver $observer
         */
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    public function addNewOrder()
    {
        $this->orderNumber += 1;
        $this->notify();
    }

    /**
     * @return int
     */
    public function getOrderNumber(): int
    {
        return $this->orderNumber;
    }
}
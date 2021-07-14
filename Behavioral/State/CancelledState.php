<?php


namespace Behavioral\State;


class CancelledState extends State

{
    protected string  $state = StateEnum::CANCELLED_STATE;

    public function proceed()
    {
        // Payment is failed ,Order is cancelled
        $this->transitionTo(new ArchivedState());
    }
}
<?php


namespace Behavioral\State;


class DeliveredState extends State
{
    protected string  $state = StateEnum::DELIVERED_STATE;

    public function proceed()
    {
        //Do some staff like ex: check for the address
        $this->transitionTo(new DoneState());
    }
}
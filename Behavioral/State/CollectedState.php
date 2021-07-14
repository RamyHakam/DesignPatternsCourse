<?php


namespace Behavioral\State;


class CollectedState extends State
{
    protected string $state = StateEnum::COLLECTED_STATE;

    public function proceed()
    {
        //Do some staff like ex: confirm order items are exist and collected
        $this->transitionTo(new PaidState());
    }
}
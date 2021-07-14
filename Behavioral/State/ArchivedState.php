<?php


namespace Behavioral\State;


class ArchivedState extends State
{
    protected string  $state = StateEnum::ARCHIVED_STATE;

    public function proceed()
    {
        // Do Nothing
    }

    protected function transitionTo(State $state)
    {
        // Do Noting
    }
}
<?php


namespace Behavioral\State;


abstract class State
{
    protected string $state;

    private OrderContext $context;

    public function setOrderContext(OrderContext $context)
    {
        $this->context = $context;
        $this->addStateToLog();
    }

    abstract public function proceed();

    protected function transitionTo(State $state)
    {
        $this->getContext()->setState($state);
    }

    /**
     * @return string
     */
    public function getState(): string
    {
        return $this->state;
    }

    /**
     * @return OrderContext
     */
    public function getContext(): OrderContext
    {
        return $this->context;
    }

    private function addStateToLog()
    {
        $this->getContext()->addToOrderLogs($this->state);
    }

}
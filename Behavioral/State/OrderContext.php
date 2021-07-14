<?php


namespace Behavioral\State;


class OrderContext
{
    /**
     * @var User
     */
    private User $client;

    /**
     * @var State
     */
    private State $state;

    /**
     * @var array
     */
    private array $orderLogs;

    public function __construct(User $client)
    {
        $this->client = $client;
        $this->state = new CreatedState();
    }

    /**
     * @return User
     */
    public function getClient(): User
    {
        return $this->client;
    }


    public function orderProceed()
    {
        $this->state->setOrderContext($this);
        $this->state->proceed();
        return $this->state;
    }

    /**
     * @return array
     */
    public function getOrderLogs(): array
    {
        return $this->orderLogs;
    }

    public function addToOrderLogs(string $log)
    {
        $this->orderLogs [] = $log;
    }

    /**
     * @param State $state
     */
    public function setState(State $state): void
    {
        $this->state = $state;
    }

    /**
     * @return State
     */
    public function getState(): State
    {
        return $this->state;
    }
}
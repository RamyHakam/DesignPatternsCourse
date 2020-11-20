<?php


namespace Behavioral\Mediator;


abstract class Road
{
    public const STOP_EVENT = 'stop';
    public const MOVE_EVENT = 'move';
    private $roadStatus = '';
    /**
     * @var MediatorInterface
     */
    private MediatorInterface $mediator;

    public function __construct()
    {

    }

    /**
     * @param MediatorInterface $mediator
     */
    public function setMediator(MediatorInterface $mediator): void
    {
        $this->mediator = $mediator;
    }


    public function move()
    {
        $this->roadStatus = self::MOVE_EVENT;

    }

    public function stop()
    {
        $this->roadStatus = self::STOP_EVENT;
    }

    abstract function getId(): string;

    public function getRoadStatus(): string
    {
        return $this->roadStatus;
    }
}
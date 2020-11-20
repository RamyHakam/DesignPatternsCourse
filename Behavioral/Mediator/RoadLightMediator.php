<?php


namespace Behavioral\Mediator;


class RoadLightMediator implements MediatorInterface
{
    /**
     * @var Road
     */
    private Road $rightRoad;
    /**
     * @var Road
     */
    private Road $leftRoad;

    public function __construct(Road $rightRoad, Road $leftRoad)
    {
        $this->rightRoad = $rightRoad;
        $this->rightRoad->setMediator($this);
        $this->leftRoad = $leftRoad;
        $this->leftRoad->setMediator($this);
    }

    public function action(Road $road, string $event)
    {
        if ($road->getId() === 'LEFT') {
            if ($event === Road::MOVE_EVENT) {
                $this->rightRoad->stop();
            } else {
                $this->rightRoad->move();
            }
        }

        if ($road->getId() === 'RIGHT') {
            if ($event === Road::MOVE_EVENT) {
                $this->leftRoad->stop();
            } else {
                $this->leftRoad->move();
            }
        }

    }


}
<?php

namespace  Tests;

use Behavioral\State\OrderContext;
use Behavioral\State\StateEnum;
use Behavioral\State\User;
use PHPUnit\Framework\TestCase;

class StateTest extends TestCase
{

    public function testCanCreateOrder()
    {
        $user = new User('ramy', '4040', true);
        $order = new OrderContext($user);
        self::assertEquals(StateEnum::CREATED_STATE, $order->getState()->getState());
    }

    public function testCanMoveOrderFromCreatedToArchivedOrder()
    {
        $user = new User('ramy', '4040', true);
        $order = new OrderContext($user);
        $order->orderProceed();
        $order->orderProceed();
        $order->orderProceed();
        $order->orderProceed();
        $order->orderProceed();
        $order->orderProceed();
        self::assertEquals(StateEnum::ARCHIVED_STATE, $order->getState()->getState());
    }


    public function testCanMoveOrderFromCreatedToCancelledOrder()
    {
        $user = new User('ramy', '4040', false);
        $order = new OrderContext($user);
        $order->orderProceed();
        $order->orderProceed();
        $order->orderProceed();
        self::assertEquals(StateEnum::CANCELLED_STATE, $order->getState()->getState());
    }
}
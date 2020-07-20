<?php


namespace Structural\Proxy;


class ATMProxy extends BankAccount implements BankAccountInterface
{
    private $balance = null;

    public function getBalance()
    {

        return $this->balance = parent::getBalance();
    }
}
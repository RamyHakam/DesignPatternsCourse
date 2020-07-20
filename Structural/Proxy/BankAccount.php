<?php


namespace Structural\Proxy;


class BankAccount implements BankAccountInterface
{
    private $transacitons =[];

    public function deposit(int $amount)
    {
       $this->transacitons []= +$amount;
       return true;
    }

    public function withdraw(int $amount)
    {
        if($this->getBalance() >$amount)
        {
            $this->transacitons [] = -$amount;
            return $amount;
        }
        return  false;
    }

    public function getBalance()
    {
        return array_sum($this->transacitons);
    }
}
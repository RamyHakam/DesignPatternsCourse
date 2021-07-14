<?php


namespace Behavioral\State;


class User
{
    private string $name;
    private string $address;
    private bool $paymentExist;

    public function __construct(string $name, string $address, bool $paymentExist)
    {
        $this->name = $name;
        $this->address = $address;
        $this->paymentExist = $paymentExist;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * @return bool
     */
    public function isPaymentExist(): bool
    {
        return $this->paymentExist;
    }
}
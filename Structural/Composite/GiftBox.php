<?php


namespace Structural\Composite;


class GiftBox implements ProductInterface, GiftInterface
{
    /**
     * @var Int
     */
    private $price;
    /**
     * @var Int
     */
    private $giftPrice;

    public function __construct(int $price, int $giftPrice)
    {
        $this->price = $price;
        $this->giftPrice = $giftPrice;
    }

    public function getPrice()
    {
       return $this->giftPackagePrice() + $this->price;
    }

    public function giftPackagePrice()
    {
      return $this->giftPrice;
    }


}
<?php

namespace Kata\Price;

class DiscountPrice extends PriceDecorator
{
    protected $discount = 0;

    public function getPrice()
    {
        $price = $this->price->getPrice();

        return $price - ($price * ($this->discount / 100));
    }

    public function addDiscount($discount)
    {
        $this->discount = $discount;

        return $this;
    }
}

<?php

namespace Kata\Price;

class VatPrice extends PriceDecorator
{

    public function getPrice()
    {
        $price = $this->price->getPrice();

        return $price * (1 + $this->getProduct()->getVat() / 100);
    }
}

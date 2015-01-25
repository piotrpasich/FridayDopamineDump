<?php

namespace Kata\Price;

class RegularPrice extends Price
{

    public function getPrice()
    {
        return $this->product->getPrice() * $this->quantity;
    }

}

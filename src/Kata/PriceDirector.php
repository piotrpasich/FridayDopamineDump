<?php

namespace Kata;

use Kata\Builder\DiscountCalculatorBuilder;
use Kata\Builder\RegularPriceCalculatorBuilder;

class PriceDirector
{

    public function getBuilder($kindOfPrice)
    {
        switch ($kindOfPrice) {
            case "REGULAR_PRICE":
                return new RegularPriceCalculatorBuilder();
            case "DISCOUNT_PRICE":
                return new DiscountCalculatorBuilder();
            default:
                throw new \InvalidArgumentException();
        }

    }
}

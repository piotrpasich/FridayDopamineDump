<?php

namespace Kata\Builder;

use Kata\Price\RegularPrice;
use Kata\Price\VatPrice;
use Kata\Product;

class RegularPriceCalculatorBuilder implements PriceCalculatorBuilder
{

    public function createPriceCalculation(Product $product, $quantity)
    {
        $price = new RegularPrice($product, $quantity);
        $price = new VatPrice($price);

        return $price;
    }
}

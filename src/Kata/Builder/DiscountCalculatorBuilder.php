<?php

namespace Kata\Builder;

use Kata\Price\DiscountPrice;
use Kata\Product;

class DiscountCalculatorBuilder extends RegularPriceCalculatorBuilder
{

    public function createPriceCalculation(Product $product, $quantity)
    {
        $price = parent::createPriceCalculation($product, $quantity);
        $price = new DiscountPrice($price);

        return $price;
    }
}

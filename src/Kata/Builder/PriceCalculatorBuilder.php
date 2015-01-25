<?php

namespace Kata\Builder;

use Kata\Product;

interface PriceCalculatorBuilder
{

    public function createPriceCalculation(Product $product, $quantity);

}
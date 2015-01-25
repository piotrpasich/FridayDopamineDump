<?php

namespace Kata\Price;

use Kata\Product;

abstract class PriceDecorator extends Price
{

    /**
     * @var PriceDecorator
     */
    protected $price;

    public function __construct(Price $price)
    {
        parent::__construct($price->getProduct(), $price->getQuantity());
        $this->price = $price;
    }

}
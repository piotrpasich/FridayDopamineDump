<?php

namespace Kata\Price;

use Kata\Product;

abstract class Price
{

    /**
     * @var \Kata\Product
     */
    protected $product;

    /**
     * @var integer
     */
    protected $quantity;

    public function __construct(Product $product = null, $quantity)
    {
        $this->product = $product;
        $this->quantity = $quantity;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

    public function getProduct()
    {
        return $this->product;
    }

    abstract public function getPrice();
}
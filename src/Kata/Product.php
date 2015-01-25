<?php

namespace Kata;

class Product
{

    protected $price;

    protected $vat;

    public function __construct($price, $vat)
    {
        $this->price = $price;
        $this->vat = $vat;
    }

    public function getVat()
    {
        return $this->vat;
    }

    public function getPrice()
    {
        return $this->price;
    }
}

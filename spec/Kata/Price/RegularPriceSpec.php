<?php

namespace spec\Kata\Price;

use Kata\Product;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class RegularPriceSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->beConstructedWith(new Product(10, 0), 2);
        $this->shouldHaveType('Kata\Price\RegularPrice');
    }

    function it_has_quantity()
    {
        $this->beConstructedWith(new Product(10, 0), 2);
        $this->getQuantity()->shouldReturn(2);
    }

    function it_has_product()
    {
        $this->beConstructedWith(new Product(10, 0), 2);
        $this->getProduct()->shouldReturnAnInstanceOf('Kata\Product');
    }

    function it_calculates()
    {
        $this->beConstructedWith(new Product(10, 0), 2);
        $this->getPrice()->shouldReturn(20);
    }

    function it_calculates_without_vat()
    {
        $this->beConstructedWith(new Product(10, 20), 2);
        $this->getPrice()->shouldReturn(20);
    }
}
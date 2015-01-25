<?php

namespace spec\Kata\Price;

use Kata\Price\RegularPrice;
use Kata\Product;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class VatPriceSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->beConstructedWith(new RegularPrice(new Product(10, 2), 2));
        $this->shouldHaveType('Kata\Price\VatPrice');
    }

    function it_calculates_with_vat()
    {
        $this->beConstructedWith(new RegularPrice(new Product(10, 2), 2));
        $this->getPrice()->shouldReturn(20.4);
    }

    function it_calculates_with_zero_vat()
    {
        $this->beConstructedWith(new RegularPrice(new Product(10, 0), 2));
        $this->getPrice()->shouldReturn(20);
    }
}

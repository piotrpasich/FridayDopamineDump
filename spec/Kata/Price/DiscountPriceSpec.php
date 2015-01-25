<?php

namespace spec\Kata\Price;

use Kata\Price\RegularPrice;
use Kata\Product;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class DiscountPriceSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->beConstructedWith(new RegularPrice(new Product(10, 2), 2));
        $this->shouldHaveType('Kata\Price\DiscountPrice');
    }
}

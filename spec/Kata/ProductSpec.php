<?php

namespace spec\Kata;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ProductSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->beConstructedWith(10, 8);
        $this->shouldHaveType('Kata\Product');
    }

    function it_has_vat()
    {
        $this->beConstructedWith(10, 8);
        $this->getVat()->shouldReturn(8);
    }

    function it_has_price()
    {
        $this->beConstructedWith(10, 8);
        $this->getPrice()->shouldReturn(10);
    }
}

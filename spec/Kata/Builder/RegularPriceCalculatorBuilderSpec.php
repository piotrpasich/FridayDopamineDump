<?php

namespace spec\Kata\Builder;

use Kata\Product;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class RegularPriceCalculatorBuilderSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Kata\Builder\PriceCalculatorBuilder');
    }

    function it_can_calculate_price()
    {
        $this->createPriceCalculation(new Product(10, 0), 2)->shouldReturnAnInstanceOf('Kata\Price\Price');
    }
}

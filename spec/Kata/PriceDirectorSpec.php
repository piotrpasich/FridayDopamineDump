<?php

namespace spec\Kata;

use Kata\Product;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PriceDirectorSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Kata\PriceDirector');
    }

    function it_can_create_regular_price()
    {
        $this->getBuilder("REGULAR_PRICE")->shouldReturnAnInstanceOf('Kata\Builder\RegularPriceCalculatorBuilder');

        $this->getBuilder("REGULAR_PRICE")
            ->createPriceCalculation(new Product(10, 0), 2)
            ->getPrice()
            ->shouldReturn(20);

        $this->getBuilder("REGULAR_PRICE")
            ->createPriceCalculation(new Product(10, 2), 2)
            ->getPrice()
            ->shouldReturn(20.4);
    }

    function it_can_create_price_with_dicount()
    {
        $this->getBuilder("DISCOUNT_PRICE")
            ->createPriceCalculation(new Product(10, 0), 2)
            ->getPrice()
            ->shouldReturn(20);

        $this->getBuilder("DISCOUNT_PRICE")
            ->createPriceCalculation(new Product(10, 0), 2)
            ->addDiscount(20.)
            ->getPrice()
            ->shouldReturn(16.);
    }
}

<?php

namespace spec\Kata\Builder;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class DiscountCalculatorBuilderSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Kata\Builder\DiscountCalculatorBuilder');
    }

}

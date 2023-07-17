<?php

namespace FizzBuzz;

use FizzBuzz\Core\NumberConverter;
use FizzBuzz\Spec\PassThroughRule;
use FizzBuzz\Spec\CyclicNumberRule;

use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
  public function testFizzBuzz()
  {
    $fizzBuzz = new NumberConverter([
      new CyclicNumberRule(3, "Fizz"),
      new CyclicNumberRule(5, "Buzz"),
      new PassThroughRule(),
    ]);

    $this->assertEquals("1", $fizzBuzz->convert(1));
    $this->assertEquals("2", $fizzBuzz->convert(2));
    $this->assertEquals("Fizz", $fizzBuzz->convert(3));
    $this->assertEquals("4", $fizzBuzz->convert(4));
    $this->assertEquals("Buzz", $fizzBuzz->convert(5));
    $this->assertEquals("Fizz", $fizzBuzz->convert(6));
    $this->assertEquals("Buzz", $fizzBuzz->convert(10));
    $this->assertEquals("FizzBuzz", $fizzBuzz->convert(15));
    $this->assertEquals("FizzBuzz", $fizzBuzz->convert(30));
  }
}

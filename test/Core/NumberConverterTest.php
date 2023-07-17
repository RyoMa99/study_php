<?php

namespace FizzBuzz\Core;

use PHPUnit\Framework\TestCase;

class NumberConverterTest extends TestCase
{
  public function testConvert()
  {
    $fizzBuzz = new NumberConverter([]);
    $this->assertEquals("", $fizzBuzz->convert(1));
    $this->assertEquals("", $fizzBuzz->convert(2));
    $this->assertEquals("Fizz", $fizzBuzz->convert(3));
    $this->assertEquals("", $fizzBuzz->convert(4));
    $this->assertEquals("Buzz", $fizzBuzz->convert(5));
    $this->assertEquals("Fizz", $fizzBuzz->convert(6));
    $this->assertEquals("Buzz", $fizzBuzz->convert(10));
    $this->assertEquals("FizzBuzz", $fizzBuzz->convert(15));
    $this->assertEquals("FizzBuzz", $fizzBuzz->convert(30));
  }

  public function testConvertWithSingleRule()
  {
    $rule = $this->createMock(ReplaceRuleInterface::class);
    $rule->expects($this->atLeastOnce())
      ->method('replace')
      ->with(1)
      ->willReturn("Replaced");

    $fizzBuzz = new NumberConverter([$rule]);
    $this->assertEquals("Replaced", $fizzBuzz->convert(1));
  }
}

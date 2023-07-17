<?php

namespace FizzBuzz\Core;

class NumberConverter
{
  public function convert(int $n): string
  {
    if ($n % 3 == 0 && $n % 5 == 0) {
      return "FizzBuzz";
    } elseif ($n % 5 == 0) {
      return "Buzz";
    } elseif ($n % 3 == 0) {
      return "Fizz";
    }
    return (string)$n;
  }
}

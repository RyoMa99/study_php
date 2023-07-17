<?php

namespace FizzBuzz\App;

use FizzBuzz\Core\NumberConverter;
use FizzBuzz\Spec\CyclicNumberRule;
use FizzBuzz\Spec\PassThroughRule;

class FizzBuzzSequencePrinter
{
  public function __construct(
    protected NumberConverter $fizzBuzz,
    protected OutputInterface $output,
  ) {
  }

  public function printRange(int $begin, int $end): void
  {

    $fizzBuzz = new NumberConverter([
      new CyclicNumberRule(3, "Fizz"),
      new CyclicNumberRule(5, "Buzz"),
      new PassThroughRule(),
    ]);

    for ($i = $begin; $i <= $end; $i++) {
      $text = $this->fizzBuzz->convert($i);
      $formattedText = sprintf("%d %s\n", $i, $text);
      $this->output->write($formattedText);
    }
  }
}

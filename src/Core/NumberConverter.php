<?php

namespace FizzBuzz\Core;

class NumberConverter
{
  /**
   * Undocumented function
   *
   * @param ReplaceRuleInterface[] $rules
   */
  public function __construct(
    protected array $rules
  ) {
  }

  public function convert(int $n): string
  {
    return $this->rules[0]->replace($n);
  }
}

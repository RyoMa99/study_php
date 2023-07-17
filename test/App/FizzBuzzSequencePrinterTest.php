<?php

namespace FizzBuzz\App;

use FizzBuzz\Core\NumberConverter;

use PHPUnit\Framework\TestCase;

class FizzBuzzSequencePrinterTest extends TestCase
{
  public function testPrintNone(): void
  {
    /** @var NumberConverter&\PHPUnit\Framework\MockObject\MockObject $converter */
    $converter = $this->getMockBuilder(NumberConverter::class)->setConstructorArgs([[]])->getMock();
    $converter->expects($this->never())->method('convert')->willReturn("");

    /** @var OutputInterface&\PHPUnit\Framework\MockObject\MockObject $output */
    $output = $this->getMockBuilder(OutputInterface::class)->getMock();
    $output->expects($this->never())->method('write');

    $printer = new FizzBuzzSequencePrinter($converter, $output);
    $printer->printRange(0, -1);
  }

  public function testPrint1To3(): void
  {
    /** @var NumberConverter&\PHPUnit\Framework\MockObject\MockObject $converter */
    $converter = $this->getMockBuilder(NumberConverter::class)->setConstructorArgs([[]])->getMock();
    $converter->expects($this->exactly(3))->method('convert')
      ->will($this->returnValueMap([
        [1, "1"],
        [2, "2"],
        [3, "Fizz"],
      ]));

    /** @var OutputInterface&\PHPUnit\Framework\MockObject\MockObject $output */
    $output = $this->getMockBuilder(OutputInterface::class)->getMock();
    $output->expects($this->exactly(3))
      ->method('write')
      ->withConsecutive(["1 1\n"], ["2 2\n"], ["3 Fizz\n"]);


    $printer = new FizzBuzzSequencePrinter($converter, $output);
    $printer->printRange(1, 3);
  }
}

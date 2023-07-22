<?php

namespace UI;

use Command\CommandInterface;

class SelectionItem
{
  public function __construct(
    public string $label,
    public CommandInterface $command
  ) {
  }
}

class SelectionUI
{
  /** @var SelectionItem[] */
  protected array $selectionItems = [];

  public function registerCommand(
    string $label,
    CommandInterface $command
  ): void {
    $this->selectionItems[] = new SelectionItem($label, $command);
  }

  public function select(int $number): void
  {
    $command = $this->selectionItems[$number - 1]->command;
    $command->invoke();
  }
}

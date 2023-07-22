<?php

namespace Command;

interface CommandInterface
{
  public function invoke(): void;
}

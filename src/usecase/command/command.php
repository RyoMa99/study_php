<?php

namespace UseCase\Command;

use UseCase\PetShop;
use UseCase\Pet;
use Command\CommandInterface;

class BuyPetCommand implements CommandInterface
{
  public function __construct(
    protected PetShop $shop,
    protected Pet $pet
  ) {
  }

  public function invoke(): void
  {
    // $this->shop と $this->pet を使って購入を処理する
  }
}

class CancelBuyingCommand implements CommandInterface
{
  public function __construct(
    protected PetShop $shop
  ) {
  }

  public function invoke(): void
  {
    // $this->shopに対してキャンセルを申し出る
  }
}

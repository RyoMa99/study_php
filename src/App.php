<?php

namespace App;

use UI\SelectionUI;
use UseCase\PetShop;
use UseCase\Cat;
use UseCase\Dog;
use UseCase\Command\BuyPetCommand;
use UseCase\Command\CancelBuyingCommand;

function createPetSelectionUI(PetShop $shop)
{
  $ui = new SelectionUI();
  $ui->registerCommand("猫をください", new BuyPetCommand($shop, new Cat()));
  $ui->registerCommand("犬をください", new BuyPetCommand($shop, new Dog()));
  $ui->registerCommand("やっぱりやめ ます", new CancelBuyingCommand($shop));
  return $ui;
}

$ui = createPetSelectionUI(new PetShop());
$userInput = (int)fgets(STDIN);
$ui->select($userInput); // 選んだ項目のコマンドが実行

<?php

require_once 'vending-item.php';
require_once 'vending-machine.php';
require_once 'snack.php';
require_once 'cup-coffee.php';

use oop\venderMachine\VendingMachine;
use oop\venderItem\VenderItem;
use oop\venderItem\CupCoffee;
use oop\venderItem\Snack;

$cider = new VenderItem('cider');
$hotCupCoffee = new CupCoffee('hot');
$snack = new Snack('snack');
$vendingMachine = new VendingMachine();

$vendingMachine->depositCoin(100);
$vendingMachine->depositCoin(100);
echo $vendingMachine->pressButton($cider);

echo $vendingMachine->pressButton($hotCupCoffee);
$vendingMachine->addCup(1);
echo $vendingMachine->pressButton($hotCupCoffee);

echo $vendingMachine->pressButton($snack);
$vendingMachine->depositCoin(100);
$vendingMachine->depositCoin(100);
echo $vendingMachine->pressButton($snack);
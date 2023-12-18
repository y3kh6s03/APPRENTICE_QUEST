<?php

// class VendingMachine
// {

//     public string $manufacturerName;
//     public int $coin = 0;
//     public int $stockCup = 0;

//     public function __construct($name)
//     {
//         $this->manufacturerName = $name;
//     }

//     public function depositCoin(int $coin)
//     {
//         if ($coin === 100) {
//             $this->coin += $coin;
//         } else {
//             return '100円を入れてください。' . PHP_EOL;
//         }
//     }

//     private function pressManufacturerName()
//     {
//         return $this->manufacturerName;
//     }

//     public function pressButton(object $item)
//     {
//         if(get_class($item) === 'CupCoffee'){

//             if($this->stockCup >= 1 && $this->coin >= $item->price){

//                 $this->stockCup --;
//                 $this->coin -= $item->price;
//                 return method_exists($item, 'orderMsg')
//                 ? $item->orderMsg()
//                 : $item->name . PHP_EOL;

//             }else{

//                 return 'カップかお金が不足しています。'.PHP_EOL;

//             }
//         }else{
//             if($this->coin >= $item->price){

//                 $this->coin -= $item->price;
//                 return method_exists($item, 'orderMsg')
//                 ? $item->orderMsg()
//                 : $item->name . PHP_EOL;

//             }
//         }
//         if ($this->coin >= $item->price) {
//         } else {
//             return 'お金が不足しています。' . PHP_EOL;
//         }
//     }

//     public function addCup(int $quentity)
//     {
//         if($this->stockCup <= 100){
//             $this->stockCup += $quentity;
//         }else{
//             return 'カップがいっぱいです。'.PHP_EOL;
//         }
//     }
// }

// class Item
// {
//     public string $name;
//     public int $price;

//     public function __construct($name)
//     {
//         $this->name = $name;
//         $this->setPrice();
//     }

//     protected function setPrice()
//     {
//         if ($this->name === 'cider') {
//             $this->price = 100;
//         } else {
//             $this->price = 150;
//         }
//     }
// }

// class CupCoffee extends Item
// {

//     protected function setPrice()
//     {
//         $this->price = 100;
//     }

//     public function orderMsg()
//     {
//         return $this->name . ' cup coffee' . PHP_EOL;
//     }
// }

// class Snack extends Item {

//     protected function setPrice()
//     {
//         $this->price = 150;
//     }

//     public function orderMsg()
//     {
//         return 'potato chips'. PHP_EOL;
//     }
// }

// $hotCupCoffee = new CupCoffee('hot');
// $cider = new Item('cider');
// $snack = new Snack('snack');
// $vendingMachine = new VendingMachine('サントリー');
// $vendingMachine->depositCoin(100);
// $vendingMachine->depositCoin(100);
// echo $vendingMachine->pressButton($cider);

// echo $vendingMachine->pressButton($hotCupCoffee);
// $vendingMachine->addCup(1);
// echo $vendingMachine->pressButton($hotCupCoffee);

// echo $vendingMachine->pressButton($snack);
// $vendingMachine->depositCoin(100);
// $vendingMachine->depositCoin(100);
// echo $vendingMachine->pressButton($snack);

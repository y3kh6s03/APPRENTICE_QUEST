<?php

class DrinkItem
{

    public string $name = "";
    private int $price = 0;

    public function __construct($name)
    {
        if($this->validateName()){
            $this->name = $name;
            $this->getPrice();
        }else{
            echo '商品名はcolaかciderを選択してください。' . PHP_EOL;
        }
    }

    private function getPrice()
    {
        if ($this->name === 'cola') {
            return $this->price = 150;
        } elseif ($this->name === 'cider') {
            return $this->price = 100;
        }
    }

    private function validateName()
    {
        if ($this->name === 'cola' || $this->name === 'cider') {
            return true;
        } else {
            return false;
        }
    }
}

// クラスを定義する
class VendingMachine
{

    private string $manufacturerName;
    private int $coin = 0;

    public function __construct($manufacturerName)
    {
        $this->manufacturerName = $manufacturerName;
    }


    public function pressButton($item)
    {
        if ($this->coin >= $item->price) {
            $this->coin -= $item->price;
            return $item->name . PHP_EOL;
        } else {
            echo 'お金が不足しています。' . PHP_EOL;
        }
    }

    private function pressManufacturerName()
    {
        return $this->manufacturerName . PHP_EOL;
    }

    public function depositCoin($coin)
    {
        if ($this->validateCoin($coin)) {
            $this->coin += 100;
            return;
        } else {
            echo '100円以外ご利用いただけません。' . PHP_EOL;
        }
    }

    public function validateCoin($coin)
    {
        if ($coin === 100) {
            return true;
        } else {
            return false;
        }
    }
}

$cola = new DrinkItem('cola');
// $vendingMachine = new VendingMachine('サントリー');
// $vendingMachine->depositCoin(100);
// echo $vendingMachine->pressButton($cola);
// $vendingMachine->depositCoin(100);
// echo $vendingMachine->pressButton($cola);

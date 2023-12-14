<?php
class VendingMachine
{
    private int $coin = 0;
    private int $stockCup = 0;
    private int $max;

    public function __construct($max = 100)
    {
        $this->max = $max;
    }

    public function depositCoin($coin)
    {
        if ($coin === 100) {
            return $this->coin += $coin;
        } else {
            echo '100円を入れてください。' . PHP_EOL;
        }
    }

    private function withdrawCoin($price)
    {
        $this->coin -= $price;
    }

    private function validateCoin($item)
    {
        if ($this->coin >= $item->price) {
            return true;
        } else {
            return false;
        }
    }

    private function validateQuantitiy($quantity)
    {
        if (
            $this->stockCup <= $this->max
            && $quantity <= $this->max - $this->stockCup
        ) {
            return true;
        } else {
            return false;
        }
    }

    public function addCup(int $quantity)
    {
        if ($this->validateQuantitiy($quantity)) {
            $this->stockCup += $quantity;
        }else{
            return '在庫に問題が発生しました！'.PHP_EOL;
        }
    }

    private function removeCup()
    {
        $this->stockCup--;
    }

    private function validateCup()
    {
        if ($this->stockCup >= 1) {
            return true;
        } else {
            return false;
        }
    }

    public function pressButton(object $item)
    {
        if (get_class($item) === 'CupCoffee') {
            if ($this->validateCup() && $this->validateCoin($item)) {
                $this->removeCup();
                $this->withdrawCoin($item->price);
                return method_exists($item, 'orderMsg')
                    ? $item->orderMsg()
                    : $item->name . PHP_EOL;
            } else {
                return 'カップかお金が不足しています。' . PHP_EOL;
            }
        } else {
            if ($this->validateCoin($item)) {
                $this->withdrawCoin($item->price);
                return method_exists($item, 'orderMsg')
                    ? $item->orderMsg()
                    : $item->name . PHP_EOL;
            } else {
                return 'お金が不足しています' . PHP_EOL;
            }
        }
    }
}

class VenderItem
{
    public string $name;
    public int $price;
    private array $validNames =
    ['cola', 'cider', 'hot', 'ice', 'snack'];

    public function __construct($name)
    {
        $this->name = $this->validateName($name);;
        $this->setPrice();
    }

    private function validateName($name)
    {
        if (in_array($name, $this->validNames)) {
            return $name;
        } else {
            echo 'その商品の取り扱いはありません' . PHP_EOL;
            return false;
        }
    }

    private function setPrice()
    {
        if ($this->name === 'cola' || $this->name === 'snack') {
            $this->price = 150;
        } else {
            $this->price = 100;
        }
    }
}


class CupCoffee extends VenderItem
{
    public function orderMsg()
    {
        return $this->name . ' cup coffee' . PHP_EOL;
    }
}


class Snack extends VenderItem
{
    public function orderMsg()
    {
        return 'potato chips' . PHP_EOL;
    }
}


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

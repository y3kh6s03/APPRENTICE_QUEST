<?php

namespace oop\venderMachine;

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


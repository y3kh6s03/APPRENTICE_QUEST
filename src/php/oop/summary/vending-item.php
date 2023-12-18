<?php

namespace oop\venderItem;


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

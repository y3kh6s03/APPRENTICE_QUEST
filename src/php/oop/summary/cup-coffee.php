<?php

namespace oop\venderItem;

class CupCoffee extends VenderItem
{
    public function orderMsg()
    {
        return $this->name . ' cup coffee' . PHP_EOL;
    }
}

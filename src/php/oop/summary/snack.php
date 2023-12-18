<?php

namespace oop\venderItem;

class Snack extends VenderItem
{
    public function orderMsg()
    {
        return 'potato chips' . PHP_EOL;
    }
}

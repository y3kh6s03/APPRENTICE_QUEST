<?php

namespace oop\robot;

// 抽象クラス
abstract class Robot
{
    public string $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function stand()
    {
        echo $this->name . '、立ちまーーーーす。' . PHP_EOL;
        return $this;
    }
    public function sit()
    {
        echo $this->name . '、座りまーーーーす。' . PHP_EOL;
        return $this;
    }
    public function wark()
    {
        echo $this->name . '、歩きまーーーーす。' . PHP_EOL;
        return $this;
    }
    public function run()
    {
        echo $this->name . '、走りまーーーーす。' . PHP_EOL;
        return $this;
    }

    abstract function attack();
}
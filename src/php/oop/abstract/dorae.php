<?php

namespace oop\robot;

class Dorae extends robot {
    public function attack(){
        echo $this->name.'ぷたーーー'.PHP_EOL;
        return $this;
    }
    public function help(){
        echo 'どらえもーーーん'.PHP_EOL;
    }
}
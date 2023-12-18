<?php

namespace abs\robot;

require_once 'robot.php';

class Eva implements Robot{

    public string $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function stand(){
        echo $this->name.'は、ゆっくり立ち上がる'.PHP_EOL;
        return $this;
    }
    public function sit(){
        echo $this->name.'は、疲れ切って座り込む'.PHP_EOL;
        return $this;
    }
    public function walk(){
        echo $this->name.'は、力強く歩く'.PHP_EOL;
        return $this;
    }
}


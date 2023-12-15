<?php
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


class Anpan extends robot {
    public function attack(){
        echo $this->name.'ぱーーーんち'.PHP_EOL;
    }
}
class dorae extends robot {
    public function attack(){
        echo $this->name.'ぷたーーー'.PHP_EOL;
        return $this;
    }
    public function help(){
        echo 'どらえもーーーん'.PHP_EOL;
    }
}

$anpan = new Anpan('あーん');
$anpan->stand()->run()->attack();
$dorae = new dorae('たけこ');
$dorae->sit()->wark()->attack()->help();



// インターフェース
interface RobotInterface{
    public function stand();
    public function sit();
    public function wark();
}

class Eva implements RobotInterface{

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
    public function wark(){
        echo $this->name.'は、力強く歩く'.PHP_EOL;
        return $this;
    }
}

$eva = new Eva('シンジ');
$eva->stand()->sit()->wark();


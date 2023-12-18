<?php

require_once 'robot.php';
require_once 'anpan.php';
require_once 'dorae.php';

use oop\robot\Anpan;
use oop\robot\Dorae;

$anpan = new Anpan('あーん');
$anpan->stand()->run()->attack();
$dorae = new Dorae('たけこ');
$dorae->sit()->wark()->attack()->help();



// インターフェース
// interface RobotInterface{
//     public function stand();
//     public function sit();
//     public function wark();
// }

// class Eva implements RobotInterface{

//     public string $name;

//     public function __construct($name)
//     {
//         $this->name = $name;
//     }

//     public function stand(){
//         echo $this->name.'は、ゆっくり立ち上がる'.PHP_EOL;
//         return $this;
//     }
//     public function sit(){
//         echo $this->name.'は、疲れ切って座り込む'.PHP_EOL;
//         return $this;
//     }
//     public function wark(){
//         echo $this->name.'は、力強く歩く'.PHP_EOL;
//         return $this;
//     }
// }

// $eva = new Eva('シンジ');
// $eva->stand()->sit()->wark();


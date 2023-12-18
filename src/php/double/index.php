<?php
require_once 'double-number.php';


echo "好きな数値を入力してください: ";
$inputNumber = trim(fgets(STDIN));

$result = doubleNumber($inputNumber);
echo "2倍の数値です: $result\n";
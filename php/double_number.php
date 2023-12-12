<?php
echo "好きな数値を入力してください: ";
$inputNumber = trim(fgets(STDIN));

function doubleNumber($val) {
    $num = is_numeric($val) ? $val : intval($val);
    return $num * 2;
}

$result = doubleNumber($inputNumber);
echo "2倍の数値です: $result\n";
?>
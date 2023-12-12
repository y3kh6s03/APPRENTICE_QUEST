<?php


function validateValue($val, $min = 0, $max = 0)
{
    return ($val >= $min && $val <= $max)
        ? true
        : false;
}


// 挨拶
function hello()
{
    for ($i = 1; $i <= 100; $i++) {
        echo 'こんにちは!' . PHP_EOL;
    }
}


// 羊
function sheep($n)
{
    if (validateValue($n, 1, 100)) {
        for ($i = 1; $i <= $n; $i++) {
            echo '羊が' . $i . '匹' . PHP_EOL;
        }
        echo '...おやすみなさい';
    } else {
        echo '1以上100以下の引数を半角数字で入力してください';
    }
}


// 総和
function sum_1_100()
{
    $sum = 0;
    for ($i = 1; $i <= 100; $i++) {
        $sum += $i;
    }
    echo $sum;
}


// フィボナッチ数列
function fibonacci($n)
{
    if (validateValue($n, 0, 30)) {
        switch (true) {
            case $n === 0;
                echo 0;
                break;
            case $n === 1;
                echo 1;
                break;
            case $n >= 2;
                $fiboArray = [0, 1];
                for ($i = 2; $i <= $n; $i++) {
                    $fiboArray[$i] = $fiboArray[$i - 1] + $fiboArray[$i - 2];
                }
                echo $fiboArray[$n];
                break;
        }
    } else {
        echo '0以上30以下の数値で引数を設定してください。';
    }
}
fibonacci(30);
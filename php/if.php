<?php

function greater($x, $y)
{
    if (($x >= -100 && $x <= 100)
        && ($y >= -100 && $y <= 100)
    ) {
        switch (true) {
            case $x > $y;
                echo 'x > y' . PHP_EOL;
                break;
            case $x < $y;
                echo 'x < y' . PHP_EOL;
                break;
            case $x == $y;
                echo 'x = y' . PHP_EOL;
                break;
        }
    } else {
        echo '-100以上100以下の数値を入力してください。' . PHP_EOL;
    }
}

// greater(9, 90);


function train_fare($age)
{
    if ($age >= 0 && $age <= 150) {
        switch (true) {
            case $age >= 12;
                echo '200' . PHP_EOL;
                break;
            case $age < 12 && $age >= 6;
                echo '120' . PHP_EOL;
                break;
            case $age < 6;
                echo '0' . PHP_EOL;
                break;
        }
    } else {
        echo '0以上150以下の数値を与えてください';
    }
}

// train_fare(900);

function myXor($x, $y)
{
    if (isBool($x, $y)) {
        echo $x === $y ? 'false' : 'true';
    } else {
        echo 'データ型ブーリアンで引数を入力してください。';
    }
}

function isBool($x, $y)
{
    if (is_bool($x) && is_bool($y)) {
        return true;
    } else {
        return false;
    }
}

myXor(true, true);

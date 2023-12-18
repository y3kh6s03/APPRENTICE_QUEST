<?php

function hello()
{
    echo "Hello World";
}


function greeting($name = '渡辺')
{
    // 出力の初期化
    $result = "おはよう、{$name}!";

    // 名前の入力
    echo "name: ";
    $inputVal = trim(fgets(STDIN));

    // 名前が入力されたら
    if (!empty($inputVal)) {
        $result = "おはよう、{$inputVal}!";
    }

    // 結果の出力
    echo $result;
}


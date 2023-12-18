<?php

function convertSecondsToTime()
{
    while (true) {
        // 入力
        echo 's: ';

        // 入力値の取得
        $inputVal = trim(fgets(STDIN));

        if (($inputVal >= 0 && $inputVal <= 86400)
            && validInputValue($inputVal)
        ) {

            // 入力値を時間へ
            $hours = floor($inputVal / 3600);

            // 残りの秒数を取得して、分数へ
            $remainingSeconds = $inputVal % 3600;
            $minutes = floor($remainingSeconds / 60);
            // 残りの秒数を取得
            $seconds = $remainingSeconds % 60;

            echo $hours . ':' . $minutes . ':' . $seconds .PHP_EOL;
            break;
        } else {
            echo '無効な入力です。0以上、86400以下の半角数字で再度入力してください。';
        }
    }
    echo "ありがとうございました！";
}

function validInputValue($val)
{
    return preg_match('/^[0-9]+$/', $val);
}

// convertSecondsToTime();
<?php

namespace info;

require_once "info.php";

use info\Info;

class UserInfo extends Info
{
    public function open($player)
    {
        foreach ($player->cardsInHand as $key => $vals) {
            if (!(empty($vals))) {
                foreach ($vals as $val) {
                    echo "{$player->name}の引いたカードは{$key}の{$val}です。" . PHP_EOL;
                }
            }
        }
    }

    public function doubleDown()
    {
        echo "ダブルダウンしますか？(y/n)" . PHP_EOL;
        fscanf(STDIN, "%s", $isDouble);
        if ($isDouble === "y") {
            return true;
        } else {
            return false;
        }
    }
}

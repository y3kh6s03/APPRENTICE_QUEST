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
}

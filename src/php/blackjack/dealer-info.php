<?php

namespace info;

use card\Card;

class DealerInfo extends Info
{
    public function open($player)
    {
        foreach ($player->cardsInHand as $key => $vals) {
            if (!(empty($vals))) {
                foreach ($vals as $val) {
                    echo "ディーラーの引いたカードは{$key}の{$val}です。" . PHP_EOL;
                    echo "ディーラーの引いた2枚目のカードはわかりません。" . PHP_EOL;
                    break 2;
                }
            }
        }
    }

    public function secondCard($result)
    {
        foreach ($result as $key => $val) {
            echo "ディーラーの引いた2枚目のカードは{$key}の{$val}でした。" . PHP_EOL;
        }
    }

    public function drewOpen($result)
    {
        foreach ($result as $key => $val) {
            echo "ディーラーの引いたカードは{$key}の{$val}です。" . PHP_EOL;
        }
    }

    public function drewCard($player)
    {
        $card = new Card();
        while ($player->score <= 17) {
            $result = $card->drew($player);
            $this->drewOpen($result);
            $player->calcScore();
            if ($player->score <= 17) {
                $this->score($player);
            }
        }
    }
}

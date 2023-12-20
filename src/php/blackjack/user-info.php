<?php

namespace info;

require_once 'card.php';
require_once 'player.php';

use card\Card;

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

    public function drewCard($player)
    {
        $card = new Card();
        echo "カードを引きますか？(Y/N):" . PHP_EOL;
        fscanf(STDIN, '%s', $input);
        if ($input === 'y') {
            while ($input == 'y') {
                $result = $card->drew($player);
                $this->addCard($result, $player);
                $player->calcScore();
                $this->score($player);
                $input = '';
                echo "カードを引きますか？(y/n):" . PHP_EOL;
                fscanf(STDIN, '%s', $input);
            }
        }
    }
}

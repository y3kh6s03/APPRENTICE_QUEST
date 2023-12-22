<?php

namespace card;

require_once "info/dealer-info.php";

use info\DealerInfo;
use info\UserInfo;

class Card
{
    private array $CARD_NUMS = ['A', 2, 3, 4, 5, 6, 7, 8, 9, 'J', 'Q', 'K'];

    public function drew($player)
    {
        $key = array_rand($player->cardsInHand);
        $val = $this->CARD_NUMS[array_rand($this->CARD_NUMS)];
        $resultDrewCard = array($key => $val);
        $player->cardsInHand = array_merge_recursive($player->cardsInHand, $resultDrewCard);

        return $resultDrewCard;
    }

    public function addDrew($player)
    {
        $info = new UserInfo();
        echo "カードを引きますか？(y/n):" . PHP_EOL;
        fscanf(STDIN, '%s', $input);
        if ($input === 'y') {
            while ($input == 'y') {
                $result = $this->drew($player);
                $info->addCard($result, $player);
                $player->calcScore();
                $info->score($player);
                $input = '';
                echo "カードを引きますか？(y/n):" . PHP_EOL;
                fscanf(STDIN, '%s', $input);
            }
        }
    }
    public function doubleDrew($player)
    {
        $this->drew($player);
    }

    public function autoDrew($player)
    {
        if ($player->name === "ディーラー") {
            $info = new DealerInfo();
            while ($player->score <= 17) {
                $result = $this->drew($player);
                $info->drewOpen($result);
                $player->calcScore();
                if ($player->score <= 17) {
                    $info->score($player);
                }
            }
        } else {

            while ($player->score <= 17) {
                $this->drew($player);
                $player->calcScore();
            }
        }
    }
}

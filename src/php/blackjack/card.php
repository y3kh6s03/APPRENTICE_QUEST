<?php

namespace card;

class Card
{
    private array $CARD_NUMS = ['A', 2, 3, 4, 5, 6, 7, 8, 9, 'J', 'Q', 'K'];

    public function drew($player)
    {
        $key = array_rand($player->cardsInHand);
        $resultDrewCard = [];
        $val = $this->CARD_NUMS[array_rand($this->CARD_NUMS)];
        $resultDrewCard = array($key => $val);
        $player->cardsInHand = array_merge_recursive($player->cardsInHand, $resultDrewCard);

        return $resultDrewCard;
    }
}

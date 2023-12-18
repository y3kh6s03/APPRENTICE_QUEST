<?php

namespace card;

class Card
{
    public bool $isPlayer;
    public array $cardsInHand = [];
    private array $CARDS = [
        'ハート' => ['A', 2, 3, 4, 5, 6, 7, 8, 9, 'J', 'Q', 'K'],
        'ダイヤ' => ['A', 2, 3, 4, 5, 6, 7, 8, 9, 'J', 'Q', 'K'],
        'クラブ' => ['A', 2, 3, 4, 5, 6, 7, 8, 9, 'J', 'Q', 'K'],
        'スペード' => ['A', 2, 3, 4, 5, 6, 7, 8, 9, 'J', 'Q', 'K']
    ];

    public function __construct($isPlayer = true)
    {
        $this->isPlayer = $isPlayer;
    }

    public function drewCards($count = 2)
    {
        // 配列からカードのマークを取得
        $key = array_rand($this->CARDS, $count);
        // 取得したマークから値をランダムに取得する
        for ($i = 0; $i < $count; $i++) {
            $drewCards = array($key[$i] => $this->CARDS[$key[$i]][array_rand($this->CARDS[$key[$i]])]);
            $this->cardsInHand = array_merge($this->cardsInHand, $drewCards);
        }
        return $this->cardsInHand;
    }
}

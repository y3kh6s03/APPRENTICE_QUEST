<?php

namespace card;

require_once 'game.php';

use game\Game;

class Card
{
    public bool $isPlayer;
    public array $cardsInHand = [
        'ハート' => [],
        'ダイヤ' => [],
        'クラブ' => [],
        'スペード' => []
    ];
    private array $CARDS_NUM = ['A', 2, 3, 4, 5, 6, 7, 8, 9, 'J', 'Q', 'K'];

    public function __construct($isPlayer = true)
    {
        $this->isPlayer = $isPlayer;
    }

    public function drewCards($count = 2)
    {
        $keys = is_array(array_rand($this->cardsInHand, $count))
            ? array_rand($this->cardsInHand, $count)
            : array(array_rand($this->cardsInHand, $count));

        foreach ($keys as $key) {
            $val = $this->CARDS_NUM[array_rand($this->CARDS_NUM)];
            $this->cardsInHand = array_merge_recursive($this->cardsInHand, array($key => $val));
        }
    }

    public function addCard($userCards)
    {
        $game = new Game;
        echo 'カードを引きますか？(Y/N):';
        fscanf(STDIN, '%s', $input);
        while ($input === 'Y') {
            $this->drewCards(1);
            $game->addScore($userCards);
            $game->infoScore();
            fscanf(STDIN, '%s', $input);
        }
    }
}

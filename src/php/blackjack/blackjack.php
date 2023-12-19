<?php

require_once "game.php";
require_once "card.php";

use card\Card;
use game\Game;


function blackjack()
{
    $blackjack = new Game;
    $playerCards = new Card;
    $dealerCards = new Card(false);

    $blackjack->start();
    $playerCards->drewCards();
    $dealerCards->drewCards();
    $blackjack->info($playerCards);
    $blackjack->info($dealerCards);
    $blackjack->addScore($playerCards);
    $blackjack->infoScore();
    $playerCards->addCard($playerCards);
}

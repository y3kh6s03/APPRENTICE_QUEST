<?php

require_once "user-info.php";
require_once "dealer-info.php";
require_once "card.php";
require_once "player.php";

use card\Card;
use info\UserInfo;
use info\DealerInfo;
use player\Player;


function blackjack()
{
    $userInfo = new UserInfo();
    $dealerInfo = new DealerInfo();
    $card = new Card();
    $user = new Player('あなた', true);
    $dealer = new Player('ディーラー', false);
    $players = [$user, $dealer];

    echo "ブラックジャックを開始します。" . PHP_EOL;

    try {
        $card->drew($user);
        $card->drew($user);
        $user->calcScore($user);
        $userInfo->open($user);

        $card->drew($dealer);
        $dealerInfo->open($dealer);

        $userInfo->score($user)->drewCard($user);

        $result = $card->drew($dealer);
        $dealerInfo->secondCard($result);
        $dealer->calcScore($dealer);
        $dealerInfo->score($dealer);

        $dealerInfo->drewCard($dealer);
        $dealer->calcScore($dealer);

        $userInfo->result($user);
        $dealerInfo->result($dealer);

        $winPlayer = array_reduce($players, function ($maxScorePlayer, $player) {
            return ($player->score > $maxScorePlayer->score) ? $player : $maxScorePlayer;
        }, $players[0]);
        echo "{$winPlayer->name}の勝ちです！";
    } catch (Throwable $e) {
        echo $e;
    } finally {
        echo "ブラックジャックを終了します。";
    }
}

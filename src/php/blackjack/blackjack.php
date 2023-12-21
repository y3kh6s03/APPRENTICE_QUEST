<?php

require_once "info/user-info.php";
require_once "info/dealer-info.php";
require_once "card.php";
require_once "player.php";

use card\Card;
use info\UserInfo;
use info\DealerInfo;

function blackjack($players)
{
    $userInfo = new UserInfo();
    $dealerInfo = new DealerInfo();
    $card = new Card();

    try {
        userFirstCard($players[0]);
        dealerFirstCard($players[1]);

        $userInfo->score($players[0]);
        $card->addDrew($players[0]);

        dealerDrew($players[1]);

        cpuDrew($players);

        for ($i = 0; $i < count($players); $i++) {
            if ($players[$i]->name !== "ディーラー") {
                $userInfo->result($players[$i]);
            }
        }
        $dealerInfo->result($players[1]);

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

function userFirstCard($user)
{
    $userInfo = new UserInfo();
    $card = new Card();

    $card->drew($user);
    $card->drew($user);
    $user->calcScore($user);
    $userInfo->open($user);
}

function dealerFirstCard($dealer)
{
    $dealerInfo = new DealerInfo();
    $card = new Card();

    $card->drew($dealer);
    $dealerInfo->open($dealer);
}

function dealerDrew($dealer)
{
    $dealerInfo = new DealerInfo();
    $card = new Card();

    $result = $card->drew($dealer);
    $dealerInfo->secondCard($result);
    $dealer->calcScore($dealer);
    $dealerInfo->score($dealer);
    $card->autoDrew($dealer);
    $dealer->calcScore($dealer);
}

function cpuDrew($players)
{
    $card = new Card();

    for ($i = 2; $i < count($players); $i++) {
        $card->autoDrew($players[$i]);
    }
}

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
        userFirstCard($players[0], $userInfo, $card);
        dealerFirstCard($players[1], $dealerInfo, $card);

        $userInfo->score($players[0]);
        $isDouble = $userInfo->doubleDown();
        if ($isDouble) {
            $card->doubleDrew($players[0]);
            $players[0]->calcScore($players[0]);
            $userInfo->score($players[0]);
        } else {
            $card->addDrew($players[0]);
        }

        dealerDrew($players[1], $dealerInfo, $card);

        cpuDrew($players, $card);

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

function userFirstCard($user, $userInfo, $card)
{
    $card->drew($user);
    $card->drew($user);
    $user->calcScore($user);
    $userInfo->open($user);
}

function dealerFirstCard($dealer, $dealerInfo, $card)
{
    $card->drew($dealer);
    $dealerInfo->open($dealer);
}

function dealerDrew($dealer, $dealerInfo, $card)
{
    $result = $card->drew($dealer);
    $dealerInfo->secondCard($result);
    $dealer->calcScore($dealer);
    $dealerInfo->score($dealer);
    $card->autoDrew($dealer);
    $dealer->calcScore($dealer);
}

function cpuDrew($players, $card)
{
    for ($i = 2; $i < count($players); $i++) {
        $card->autoDrew($players[$i]);
    }
}

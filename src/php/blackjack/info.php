<?php

namespace info;

abstract class Info
{
    abstract public function open($player);

    abstract public function drewCard($player);

    public function addCard($card, $player)
    {
        foreach ($card as $key => $value) {
            echo "{$player->name}の引いたカードは{$key}の{$value}です。" . PHP_EOL;
        }

        return $this;
    }

    public function score($player)
    {
        echo "{$player->name}の現在の得点は{$player->score}です。" . PHP_EOL;
        return $this;
    }

    public function result($player)
    {
        echo "{$player->name}の得点は{$player->score}です。" . PHP_EOL;
    }
}

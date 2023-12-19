<?php

namespace game;

class Game
{

    private int $score = 0;

    public function start()
    {
        echo "ブラックジャックを開始します。" . PHP_EOL;
        return $this;
    }

    public function info($userCards)
    {
        if ($userCards->isPlayer) {
            foreach ($userCards->cardsInHand as $key => $vals) {
                if(!(empty($vals))){
                    foreach($vals as $val){
                        echo "あなたの引いたカードは{$key}の{$val}です。" . PHP_EOL;
                    }
                }
            }
        } else {
            foreach($userCards->cardsInHand as $key => $vals){
                if(!(empty($vals))){
                    foreach($vals as $val){
                        echo "ディーラーのの引いたカードは{$key}の{$val}です。" . PHP_EOL;
                        echo "ディーラーの引いた2枚目のカードはわかりません。" . PHP_EOL;
                        break 2;
                    }
                }
            }
        }
    }

    public function infoScore()
    {
        echo "あなたの現在の得点は{$this->score}です。";
    }

    public function addScore($userCards)
    {
        foreach ($userCards->cardsInHand as $key => $vals) {
            if(!(empty($vals))){
                foreach($vals as $val){
                    $val = $this->changeScore($val);
                    $this->score += $val;
                }
            }
        }
        return $this->score;
    }

    private function changeScore($val)
    {
        if ($val === 'A') {
            return 1;
        } elseif (!($val === 'A') && is_string($val)) {
            return 10;
        } else {
            return $val;
        }
    }
}



// function blackjack(){
//     global $CARDS;

//     echo 'ブラックジャックを開始します。'.PHP_EOL;

//     $playerCards = drewCards($CARDS, 2);
//     $dealerCards = drewCards($CARDS, 2);

//     playerInfo($playerCards);
//     dealerInfo($dealerCards);
//     score($playerCards);

// }




// function playerInfo($array){
//     foreach($array as $key => $val)
//     echo "あなたの引いたカードは{$key}の{$val}".PHP_EOL;
// }

// function dealerInfo($array){
//     $key = array_key_first($array);
//     echo "ディーラーの引いたカードは{$key}の{$array[$key]}".PHP_EOL;
//     echo "ディーラーの引いた2枚目のカードはわかりません。".PHP_EOL;
// }

// function score($array){
//     $score = 0;
//     foreach($array as $key => $val){
//         $score += $val;
//     }
//     echo "あなたの現在の得点は{$score}です。";
//     echo "カードを引きますか？(Y / N)".PHP_EOL;

//     $drawResponce = fgets(STDIN);
//     if($drawResponce === 'y'){
//         drewCards()
//     }
// }

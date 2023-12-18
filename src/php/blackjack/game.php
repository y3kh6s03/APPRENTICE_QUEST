<?php
namespace game;

class Game {

    public function start(){
        echo "ブラックジャックを開始します。".PHP_EOL;
        return $this;
    }

    public function info($userCards){
        if($userCards->isPlayer){
            foreach($userCards->cardsInHand as $key => $val)
            echo "あなたの引いたカードは{$key}の{$val}です。".PHP_EOL;
        }else{
            $key = array_key_first($userCards->cardsInHand);
            echo "ディーラーの引いたカードは{$key}の{$userCards->cardsInHand[$key]}です。".PHP_EOL;
            echo "ディーラーの引いた2枚目のカードはわかりません。".PHP_EOL;
        }
    }

    // public function score($userCards){
    //     $count = !($count === 0) ? $count : 0;
    //     foreach($user->cardsInHand as $key => $value){
    //         if($value === 'A'){

    //         }
    //     }
    // }


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


<?php
function calculate($num1, $num2, $operator)
{
   try{

      $operator = validateOperator($operator);
      $num1 = validateNum($num1);
      $num2 = validateNum($num2);

         if ($operator === '+') {

            echo $num1 + $num2;

         } elseif ($operator === '-') {

            echo $num1 - $num2;

         } elseif ($operator === '*') {

            echo $num1 * $num2;

         } elseif ($operator === '/') {

            $num2 = validateZero($num2);
            echo $num1 / $num2;

         }

   }catch (Exception $e){
      echo $e->getMessage();
   }catch (InvalidArgumentException $e){
      echo $e->getMessage();
   }
}

function validateOperator($operator)
{
   if (!($operator === '+'
      || $operator === '-'
      || $operator === '*'
      || $operator === '/')) {

      throw new InvalidArgumentException('演算子には  +、-、*、/ のいずれかを使用してください。' . PHP_EOL);
   } else {

      return $operator;
   }
}

function validateZero($val)
{
   if ($val === 0) {
      throw new InvalidArgumentException('ゼロによる割り算は許可されていません' . PHP_EOL);
   } else {
      return $val;
   }
}

function validateNum($val)
{
   if (!(is_int($val))) {
      throw new InvalidArgumentException('num1、 num2 には整数を入力してください' . PHP_EOL);
   } else {
      return $val;
   }
}

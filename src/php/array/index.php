<?php

require_once 'array.php';
require_once 'repeat_hello.php';


fibonacci(30);

print_names(['上田', '田仲', '堀田']);

$squared_numbers = square([5, 7, 10], 2);
print_r($squared_numbers);

$even_numbers = select_even_numbers([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]);
print_r($even_numbers);
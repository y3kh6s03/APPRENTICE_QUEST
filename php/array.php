<?php


// foreach
function print_names($names = '')
{
    if (!empty($names)) {
        $names = $names;
    } else {
        echo 'name: ';
        $names = fscanf(STDIN, "%s");
    }
    foreach ($names as $i => $name) {
        echo ($i + 1) . ". " . $name . PHP_EOL;
    }
}

print_names(['上田', '田仲', '堀田']);


// array_map
function square($numbers){
    global $expo;
    $powFn = function($value) use ($expo){
        return $value ** $expo;
    };
    return array_map($powFn,$numbers);
}

$expo = 2;
$squared_numbers = square([5, 7, 10]);
print_r($squared_numbers);


// array_filter
function select_even_numbers($numbers)
{
    return array_filter($numbers,function($val){
        return !($val % 2);
    });
}

$even_numbers = select_even_numbers([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]);
print_r($even_numbers);
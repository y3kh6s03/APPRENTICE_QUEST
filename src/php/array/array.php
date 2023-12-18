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



// array_map
function square($numbers, $expo){
    $powFn = function($value) use ($expo){
        return $value ** $expo;
    };
    return array_map($powFn,$numbers);
}




// array_filter
function select_even_numbers($numbers)
{
    return array_filter($numbers,function($val){
        return !($val % 2);
    });
}


<?php
function doubleNumber($val) {
    $num = is_numeric($val) ? $val : intval($val);
    return $num * 2;
}


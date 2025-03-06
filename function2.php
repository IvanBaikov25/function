<?php
function isPerfectNumber($num) {
    if ($num < 1) {
        return false;
    }
    $sum = 0;
    for ($i = 1; $i <= $num / 2; $i++) {
        if ($num % $i === 0) {
            $sum += $i;
        }
    }
    return $sum === $num;
}
function findPerfectNumbers($arr) {
    $perfectNumbers = [];
    foreach ($arr as $number) {
        if (isPerfectNumber($number)) {
            $perfectNumbers[] = $number;
        }
    }
    return $perfectNumbers;
}
$inputArray = [6, 28, 12, 496, 1000];
$perfectNumbers = findPerfectNumbers($inputArray);
print_r($perfectNumbers);
<?php
function alphabeticalOrder($str) {
    $arr = str_split($str);
    sort($arr);
    return implode('', $arr);
}
$input = 'alphabetical';
$result = alphabeticalOrder($input);
echo $result;

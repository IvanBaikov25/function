<?php
function alphabeticalOrder(string $str): string {
    $arr = str_split($str);
    sort($arr);
    return implode('', $arr);
}
$input = 'alphabetical';
$output = alphabeticalOrder($input);
echo $output; 

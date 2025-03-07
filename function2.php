<?php
function findPerfectNumbers(array $numbers): array {
    $perfectNumbers = [];
    foreach ($numbers as $number) {
        if ($number > 1 && isPerfect($number)) {
            $perfectNumbers[] = $number;
        }
    }
    return $perfectNumbers;
}
function isPerfect(int $num): bool {
    $sumOfDivisors = 0;
    for ($i = 1; $i <= $num / 2; $i++) {
        if ($num % $i === 0) {
            $sumOfDivisors += $i;
        }
    }
    return $sumOfDivisors === $num;
}
$inputArray = [6, 28, 12, 496, 15];
$perfectNumbers = findPerfectNumbers($inputArray);
print_r($perfectNumbers);

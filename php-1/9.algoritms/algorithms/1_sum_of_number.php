<?php

$startValue = 123;
$sum = 0;

$value = $startValue;

// while ($value > 0) {
//     $sum += $value % 10;
//     $value = (int)($value / 10);
//     // var_dump($value);
// }


$sum = array_sum(str_split((string)$value));

echo "сумма цифр числа $startValue = $sum";

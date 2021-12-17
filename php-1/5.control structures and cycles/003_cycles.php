<?php

// 1. Выведите числа от 0 до 9
for ($i = 0; $i < 10; $i++) {
    echo "$i ";
}
echo "<br><br>";

// 2. Выведите 10 случайных чисел от 1 до 10
for ($i = 0; $i < 10; $i++) {
    $a = rand(1, 10);
    echo "$a ";
}
echo "<br><br>";

// 3. Создайте массив $items из 10 случайных целых значений от 0 до 9
$items = [];

for ($i = 0; $i < 10; $i++) {
    $items[] = rand(0, 9);
}

var_dump($items);
echo "<br><br>";

// 4. Добавляйте случайные целые числа от 1 до 9 в массив $numbers до тех пор, пока сумма всех элементов этого массива меньше 100
// А затем выведите сколько чисел всего в массиве: "Длинна массива numbers = {}"
$numbers = [];

while (array_sum($numbers) < 100) {
    $numbers[] = rand(1, 9);
}

$quantityElem = count($numbers);
echo "Длинна массива numbers = $quantityElem";
echo "<br><br>";

// 5. Переберите массив $numbers, созданный ранее, и посчитайте сумму всех четных чисел в нем
// Выведите следующие строки (как всегда вместо {} подставив нужные значения):
// Общая сумма массива numbers = {}
// Из нее часть, которая приходится на четные числа = {}
// И часть из нечетных чисел = {}
$sum = array_sum($numbers);
echo "Общая сумма массива numbers = $sum";
echo "<br><br>";

$sumEven = 0;
foreach ($numbers as $value) {
    if ($value % 2 == 0) {
        $sumEven += $value;
    }
}
echo "Из нее часть, которая приходится на четные числа = $sumEven";
echo "<br><br>";

$sumOdd = 0;
foreach ($numbers as $value) {
    if ($value % 2 == 1) {
        $sumOdd += $value;
    }
}
echo " И часть из нечетных чисел = $sumOdd";
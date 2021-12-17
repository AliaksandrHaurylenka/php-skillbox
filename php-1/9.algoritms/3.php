<?php
$numbers = [];

//создаем случайный массив со случайным количесвом значений
for ($i = 1; $i <= rand(3, 20); $i++) {
    $numbers[$i] = rand(0, 10);
}

$sum = 0;//заводим переменную, в которую кладем 0

//циклом проходим по ключам и если он не четный, то сумму увеличиваем
foreach ($numbers as $key => $value) {
    if($key % 2 != 0) $sum += $value;
}
  


var_dump($numbers);
var_dump($sum);
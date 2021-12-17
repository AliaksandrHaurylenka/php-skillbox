<?php
$value = [];

//вывели в массив случайные числа
for($i=0; $i < 10; $i++) {
    $value[] = rand(0, 100);
}

var_dump($value);

$index = 0;
$min = $value[0];//присваиваем в переменную первое значение массива
// var_dump($min);

foreach ($value as $i => $data) {
    if ($data < $min) {//если следующее значение меньше первого, то переменная перезаписывается и т. д.
        $min = $data;
        $index = $i;
    }
}

var_dump($min, $index);
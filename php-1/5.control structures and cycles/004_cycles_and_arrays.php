<?php

// Циклы для данных в массивах

// 1. Создайте массив скучных игрушек - $boringToys. Создайте в нем случайное количество элементов от 1 до 10, где каждый элемент этого массива это ассоциативный массив с двумя полями:
// - Название игрушки: в виде "Игрушка 1"
// - Цена игрушки: случайное число от 100 до 1000
$boringToys = [];

for ($i = 1; $i <= rand(1, 10); $i++) {
    $boringToys[] = [
        "toy" => "Игрушка $i",
        "price" => rand(100, 1000),
    ];
}

var_dump($boringToys);

// Дан массив $cars. Состоящий из трех машин со следующими данными: Мерседес - 10000 руб, BMW - 9999 руб, Автобус - 20000 руб.
$cars = [
    [
        'name' => 'Мерседес',
        'price' => 10000,
        'colors' => [],
    ],
    [
        'name' => 'BMW',
        'price' => 9999,
        'colors' => [],
    ],
    [
        'name' => 'Автобус',
        'price' => 20000,
        'colors' => [],
    ],
];

// 2. Посчитайте и выведите стоимость стоимость всех машин
$allCarsSum = 0;

foreach ($cars as $number) {
    foreach ($number as $key => $value) {
        if ($key == 'price') {
            $allCarsSum += $value;
        }
    }
}
var_dump($allCarsSum);

// 3. Для каждой машины заполните поле colors. В этом поле должны хранится все возможные варианты цветов для этой машины, при чем для каждого этого цвета, есть своя надбавка к стоимости (разная для разных машин)
// Создайте массив colors с цветами доступными для каждой машины. И случайным образом выберите из этого массива по 3 цвета для каждой машины. Эти цвета добавьте в массив $cars в поле colors. Для каждого цвета также укажите случайную надбавку к цене - случайное число от 0 до 100
// Выведите итоговый массив $cars c помощью функции var_dump и убедитесь в его правильности.

$colors = [
    "голубого",
    "черного",
    "зеленого",
    "желтого",
    "белого",
];

foreach ($cars as $key => $car) {
    for ($i = 0; $i < 3; $i++) {
        $cars[$key]['colors'][] = ['color' => $colors[rand(0, 4)],  "allowance" => rand(0, 100)];
        // var_dump($cars[$key]);
        // var_dump($cars[$key]['colors']);
        //print_r($cars[$key]); //- $key - это индекс текущей итерации в foreach
        // print_r($cars[$key]['colors']); - здесь обращаемся к массиву colors этой машины, далее [] -чтобы добавить новый элемент в массив
    }
}
// var_dump($cars);
// var_dump($cars[0]['colors']);

// 4. Каталог автомобилей.
// А теперь выведите весь каталог автомобилей в виде:
// "Купите автомобиль {} цвета {} всего за: {} руб"
// вместо {} поставьте соответственно: название автомобиля, цвет, стоимость в этом цвете.
foreach($cars as $car) {
    foreach ($car['colors'] as $colors) {
        echo "Купите автомобиль " . $car['name'] . " цвета " . $colors['color'] . " всего за: " . ($car['price'] + $colors['allowance']) . " руб. <br>";
    } 
}
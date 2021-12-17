<?php

$city1 = 200;
$city1Radius = 100;
$city2 = 600;
$city2Radius = 100;

// задаем точку, где находятся машины
$carCount = [];

for ($i = 1; $i <= 10; $i++) {
    $carCount['Машина ' . $i] = rand(0, 1000);
}

//проверяем, находится ли машина в зоне города и выводим результат
$speedCar = 0;
foreach ($carCount as $numberCar => $pointCar) {
    if (($pointCar >= $city1 - $city1Radius) && ($pointCar <= $city1 + $city1Radius)) {
        $speedCar = 70;
    } elseif (($pointCar >= $city2 - $city2Radius) && ($pointCar <= $city2 + $city2Radius)) {
        $speedCar = 70;
    } else {
        $speedCar = 90;
    }
    echo $numberCar . ' едет по городу на ' . $pointCar . ' км со скоростью не более ' . $speedCar . '<br>';
}

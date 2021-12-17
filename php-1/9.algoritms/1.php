<?php

$freq = []; //задаем пустой массив, в который в дальнейшем попадут символы
$line = "Students, hello";
$len = strlen($line); //подсчитываем количество символов в строке
for ($i = 0; $i < $len; $i++) {
    $letter = $line[$i]; //циклом вытягиваем буквы строки
    if (array_key_exists($letter, $freq)) {
        $freq[$letter]++;//если буква встречается ни один раз, то увеличиваем число до тех пор пока встречается эта буква
    } else {
        $freq[$letter] = 1;//иначе заносим в массив 1
    }
}

foreach ($freq as $key => $value) {
  echo $key . " - " . $value . "<br>";
}

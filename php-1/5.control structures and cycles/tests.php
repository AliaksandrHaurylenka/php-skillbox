<?php

$library = [
    'authors' => [
        [
            'name' => 'Джон Маккормик',
            'email' => 'john_makkormik@example.com',
        ],
        [
            'name' => 'Мартин Роберт',
            'email' => 'martin_robert@example.com',
        ],
    ],
    'books' => [
        [
            'title' => 'Чистый код: создание, анализ и рефакторинг',
            'author' => 'martin_robert@example.com',
        ],
        [
            'title' => 'Девять алгоритмов, которые изменили будущее',
            'author' => 'john_makkormik@example.com',
        ],
        [
            'title' => 'Идеальный программист',
            'author' => 'martin_robert@example.com',
        ],
    ],
];




foreach ($library as $key => $autor) {
    if ($key == 'authors') {
        foreach ($autor as $keyData => $data) {
            // $keyData = $data['email'];
            // echo $data['email'];
            // echo $keyData;
            $new_arr[$key][$keyData] = $data['email'];
        }
    }
}
// unset($keyData);
var_dump($library);
var_dump($new_arr);
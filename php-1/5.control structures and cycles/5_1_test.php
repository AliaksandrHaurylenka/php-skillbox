<?php

$library = [

    'name' => 'Джон Маккормик',
    'email' => 'john_makkormik@example.com',

];
$library['title'] = $library['name'];
unset($library['name']);
var_dump($library);

$library = [
    [
        'name' => 'Джон Маккормик',
        'email' => 'john_makkormik@example.com',
    ],
];

foreach ($library as $key => $data) {
    $library['title'] = $library[$key];
    unset($library[$key]);
}
var_dump($library);

$library = [
    [
        'name' => 'Джон Маккормик',
        'email' => 'john_makkormik@example.com',
    ],
    [
        'name' => 'Мартин Роберт',
        'email' => 'martin_robert@example.com',
    ],
];

foreach ($library as $key => $data) {
    $library[$data['email']] = $library[$key];
    unset($library[$key]);
}
var_dump($library);




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

];

foreach ($library as $key => $autor) {
    foreach ($autor as $keyData => $data) {
        $library[$key][$data['email']] = $library[$key][$keyData];
        unset($library[$key][$keyData]);
    }  
}
var_dump($library);



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
            $library[$key][$data['email']] = $library[$key][$keyData];
            unset($library[$key][$keyData]);
        } 
    }  
}
var_dump($library);

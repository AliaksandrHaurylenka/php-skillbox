<?php

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


foreach ($library as $key => $autor) {
    $library[$key]['yearOfbirth'] = rand(1800, 1900);
}
var_dump($library);


foreach ($library as $key => $autor) {
    // $key = $autor['email'];
    // echo $library[$key]['email'];
    echo $autor['email'];
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
    foreach ($library[$key] as $keyData => $data) {
        $library[$key][$keyData]['yearOfbirth'] = rand(1800, 1900);
    }
}

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
        foreach ($library[$key] as $keyData => $data) {
            $library[$key][$keyData]['yearOfbirth'] = rand(1800, 1900);
        }
    } elseif ($key == 'books') {
        foreach ($library[$key] as $keyData => $data) {
            $library[$key][$keyData]['dateOfpublication'] = rand(1800, 1900);
        }
    }
}
var_dump($library);
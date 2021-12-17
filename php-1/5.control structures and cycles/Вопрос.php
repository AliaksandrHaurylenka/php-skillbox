<? php
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

// Почему такая конструкция меняет числовые ключи,
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

];

// А такая нет?
foreach ($library as $key => $autor) {
    foreach ($autor as $keyData => $data) {
        $autor[$data['email']] = $autor[$keyData];
        unset($autor[$keyData]);
    }
    
}

var_dump($library);
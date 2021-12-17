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

/* 1. Сейчас ключами к каждому автору в этом массиве являются числовые индексы. 
Давайте заменим их, сделав ключом для каждого из авторов его email. 
Теперь, зная email автора, мы сможем без перебора массива с авторами получить нужного автора
 книги, последовательно указав несколько индексов.*/
foreach ($library as $key => $autor) {
    if ($key == 'authors') {
        foreach ($autor as $keyData => $data) {
            $library[$key][$data['email']] = $library[$key][$keyData];
            unset($library[$key][$keyData]);
        } 
    }  
}
// foreach ($library as $key => &$autor) {
//     if ($key == 'authors') {
//         foreach ($autor as $keyData => $data) {
//             $autor[$data['email']] = $autor[$keyData];
//             unset($autor[$keyData]);
//         } 
//     }  
// }
var_dump($library);


// 2. Добавьте каждому автору новое поле — «Год рождения».
// 3. Добавьте каждой книге новое поле — «Дата публикации».
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


// 4. Добавьте ещё одного автора в массив авторов и ещё одну книгу, которую написал этот автор, в массив книг.
$library['authors']['dostoevskiy@mail.ru'] = [
    'name' => 'Достоевский Федор Михайлович',
    'email' => 'dostoevskiy@mail.ru',
    'yearOfbirth' => 1821,
];

$library['books'][] = [
    'title' => 'Униженные и оскорбленные',
    'author' => 'dostoevskiy@mail.ru',
    'dateOfpublication' => 1861,
];

var_dump($library);


/* 5.Выведите информацию по всем книгам в формате: 
Книга <Название книги>, её написал <ФИО автора> <Год рождения автора> (<email автора>)
*/ 
foreach ($library['books'] as $book) {

    echo "Книга " .

        $book['title'] . ", ее написал " .

        $library['authors'][$book['author']]['name'] . " " .

        $library['authors'][$book['author']]['yearOfbirth'] . " года рождения (" .

        $book['author'] . ")<br/>" . PHP_EOL;

}

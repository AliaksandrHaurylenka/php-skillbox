<?php

$result2 = [
    'autors' => [
        1 => [
            'name' => 'Достоевский Федор Михайлович',
            'email' => 'dostoevskiy@mail.ru',
        ],

        [
            'name' => 'Тургенев Иван Сергеевич',
            'email' => 'turgenev@mail.ru',
        ]
        
    ],

    'books' => [
        1 => [
            'title' => 'Униженные и оскорбленные',
            'autorEmail' => 'dostoevskiy@mail.ru',
        ],

        [
            'title' => 'Муму',
            'autorEmail' => 'turgenev@mail.ru',
        ],   
    ],
];

$availabilityOfbooks = 'В нашей библиотеке точно есть две книги, которые вы ищете: #' . $result2['books'][1]['title'] . '# и ' . '#' . $result2['books'][2]['title'] . '#';
var_dump($availabilityOfbooks);

$mails = 'Пожалуйста, перестаньте писать гневные письма на адрес нашего любимого автора #' . $result2['autors'][1]['name'] . ' (#' . $result2['autors'][1]['email'] . "#).\r\n Пишите их лучше другому нашему автору — #" . $result2['autors'][2]['name'] . ' (#' . $result2['autors'][2]['email'] . '#), мы его любим поменьше.';
var_dump($mails);
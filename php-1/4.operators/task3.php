<?php

$result1 = [
    'autor' => [
        'name' => 'Достоевский Федор Михайлович',
        'email' => 'dostoevskiy@mail.ru',
    ],

    'book' => [
        'title' => 'Униженные и оскорбленные',
        'autorEmail' => 'dostoevskiy@mail.ru',
    ],
];

$book = "#" . $result1['autor']['name'] . "# написал книгу, которая называется" . "#" . $result1['book']['title']. "#";
var_dump($book);

$reviews = 'Автор #' . $result1['autor']['name'] . '# ждёт ваших отзывов, напишите ему на электронную почту #' . $result1['autor']['email'] . '#';
var_dump($reviews);
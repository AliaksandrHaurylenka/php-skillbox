<?php

$library = [
    'authors' => [
        'john_makkormik@example.com' => [
            'name' => 'Джон Маккормик',
            'email' => 'john_makkormik@example.com',
            'birthYear' => 1972,
        ],
        'martin_robert@example.com' => [
            'name' => 'Мартин Роберт',
            'email' => 'martin_robert@example.com',
            'birthYear' => 1952,
        ],
        'martin_fauler@example.com' => [
            'name' => 'Мартин Фаулер',
            'email' => 'martin_fauler@example.com',
            'birthYear' => 1963,
        ],
    ],
    'books' => [
        [
            'title' => 'Чистый код: создание, анализ и рефакторинг',
            'author' => 'martin_robert@example.com',
            'year' => 2013,
        ],
        [
            'title' => 'Девять алгоритмов, которые изменили будущее',
            'author' => 'john_makkormik@example.com',
            'year' => 2011,
        ],
        [
            'title' => 'Идеальный программист',
            'author' => 'martin_robert@example.com',
            'year' => 2011,
        ],
        [
            'title' => 'Шаблоны корпоративных приложений',
            'author' => 'martin_fauler@example.com',
            'year' => 2002,
        ],
    ],
];

$title = 'Библиотека программиста';

$red = (bool) rand(0, 1);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title><?=$title?></title>
    
</head>
<body>
<h1 class=<?php //if ($red == 1) {echo "red";} else {echo "";}?>><?//=$title?></h1>
<h1 <?= $red ? 'class="red"' : '' ?>><?=$title?></h1>
<div>Авторов на портале <?=count($library['authors']);?></div>
<!-- Выведите все книги -->

<?php foreach ($library['books'] as $book) {?>
    <p><span>Книга</span> <?=$book["title"]?>
    ее написал <?=$library['authors'][$book['author']]['name']?>
    <?=$library['authors'][$book['author']]['birthYear']?> года рождения (<a href="#!"><?=$book['author']?></a>)
<?php }?></p>


<?php foreach ($library['books'] as $key => $book) {?>
    <p class=<?php if ($key % 2 == 1) {echo "gray";} else {echo "";}?>><span>Книга</span> <?=$book["title"]?>
    ее написал <?=$library['authors'][$book['author']]['name']?>
    <?=$library['authors'][$book['author']]['birthYear']?> года рождения (<a href="#!"><?=$book['author']?></a>)
<?php }?></p>


</body>
</html>

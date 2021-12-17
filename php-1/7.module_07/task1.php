<?php
// Подключите ядро проекта
require_once $_SERVER['DOCUMENT_ROOT'] . '/php-1/module_07/app/core.php';
// var_dump($_SERVER['DOCUMENT_ROOT'] . '/php-1/module_07/app/core.php');

?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="tailwind.min.css" rel="stylesheet">
    <title>Модуль 07 - Задание 1</title>
</head>
<body class="bg-gray-400 font-sans leading-normal tracking-normal">

<?php
//  Подключите здесь блок с навигацией
include_once $_SERVER['DOCUMENT_ROOT'] . '/php-1/module_07/templates/navigation.php';
?>

<div class="container shadow-lg mx-auto bg-white mt-24 md:mt-14 h-screen p-10">

<?php 
// Разместите здесь решение задачи
include_once $_SERVER['DOCUMENT_ROOT'] . '/php-1/module_07/templates/task_1_content.php';
?>

</div>
</body>
</html>
<?php

// 1. Создайте переменную $errorCode, положите в нее случайное значение от 1 до 3
// для каждого отдельного кода ошибки выведите сообщение:
// 1 - "Что-то пошло не так"
// 2 - "Все прошло так как надо, но мы этого совсем не ждали"
// 3 - "Я в домике"
$errorCode = rand(1, 3);

switch ($errorCode) {
    case 1:
        echo "Что-то пошло не так<br><br>";
        break;
    case 2:
        echo "Все прошло так как надо, но мы этого совсем не ждали<br><br>";
        break;
    case 3:
        echo "Я в домике<br><br>";
        break;
}

// 2. Четный не с нами. Создайте переменную $myNumber - в которую поместите случайное значение от 0 до 10
// Если это число четное (2, 4, 6, 8, 10) - то выведите сообщение: "Четный. Ты не с нами!", если это нечетное или 0 - то выведите "Добро пожаловать!"
// Для решения задачи применяйте switch, даже если очень хочется решить с if
$myNumber = rand(0, 10);

switch ($myNumber) {
    case ($myNumber % 2 == 0):
        echo "Четный. Ты не с нами!<br><br>";
        break;
    case ($myNumber % 2 == 1):
        echo "Добро пожаловать!<br><br>";
        break;
    case 0:
        echo "Добро пожаловать!<br><br>";
        break;
}

// 3. Создайте массив $foods с продуктами питания: Яблоко, Клубника, Апельсин, Кабачок, Патиссон, Банан, Арбуз, Картошка, Лягушачие лапки
// Создайте переменную $foodItem - случайное число от 0 до 8 (количество продуктов - 1)
// Определите к какому виду относится продукт из массива $foods под индексов $foodItem: "Ягода", "Фрукт", "Овощ", "Что-то не вегетарианское"
// Выведите сообщение: "Выбранный продукт {} - это {}", вместо {} подставьте соответственно название продукта и его вид
// # Создайте дополнительную переменную для вида продукта, а вывод сделайте в конце скрипта. Кстати, если вы слышите это название первый раз, то патиссоны на вкус как кабачки, и с вампирами ничего общего не имеют)
$foods = [
    "Яблоко",
    "Клубника",
    "Апельсин",
    "Кабачок",
    "Патиссон",
    "Банан",
    "Арбуз",
    "Картошка",
    "Лягушачие лапки",
];

$foodItem = rand(0, 8);

$food = $foods[$foodItem];

switch ($food) {
    case "Яблоко":
    case "Апельсин":
    case "Банан":
        $type = "Фрукт";
        break;
    case "Клубника":
    case "Арбуз":
        $type = "Ягода";
        break;
    case "Кабачок":
    case "Патиссон":
    case "Картошка":
        $type = "Овощ";
        break;
    case "Лягушачие лапки":
        $type = "Что-то не вегетарианское";
        break;
}

echo "Выбранный продукт $food - это $type";

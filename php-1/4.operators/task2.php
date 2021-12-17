<?php

$daysBeforeExam = rand(0, 9);
$daysToPrepareForExam = rand(0, 9);
var_dump($daysBeforeExam);
var_dump($daysToPrepareForExam);

$result = $daysToPrepareForExam > $daysBeforeExam ? "Мне крышка" : "Главное — не расслабляться";
var_dump($result);

$result = $daysToPrepareForExam < $daysBeforeExam ? "Ууу, ещё успею в дотку поиграть" : "Успею или не успею";
var_dump($result);

$result = $daysToPrepareForExam == $daysBeforeExam ? "Впритирочку" : "Либо все плохо, либо очень плохо";
var_dump($result);
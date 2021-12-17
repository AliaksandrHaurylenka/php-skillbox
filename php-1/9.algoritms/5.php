<?php
$studentsCount = rand(1, 1000000);

if ($studentsCount % 100 >= 11 && $studentsCount % 100 <= 19) {
    echo "На учебе " . $studentsCount . " студентов";
} elseif ($studentsCount % 10 == 2 || $studentsCount % 10 == 3 || $studentsCount % 10 == 4) {
    echo "На учебе " . $studentsCount . " студента";
} elseif ($studentsCount % 10 == 1) {
    echo "На учебе " . $studentsCount . " студент";
} else {
    echo "На учебе " . $studentsCount . " студентов";
}

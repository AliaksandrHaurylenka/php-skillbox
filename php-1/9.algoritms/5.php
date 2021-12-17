<?php
$studentsCount = rand(1, 100000);

if ($studentsCount % 10 == 1) {
    echo "На учебе " . $studentsCount . " студент";
} elseif ($studentsCount % 10 == 2 || $studentsCount % 10 == 3 || $studentsCount % 10 == 4) {
    echo "На учебе " . $studentsCount . " студента";
} else {
    echo "На учебе " . $studentsCount . " студентов";
}

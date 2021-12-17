<?php

// $data = "Student, hello!";

// foreach (count_chars($data, 1) as $i => $val) {
//    echo "\"" , chr($i) , "\" встречается в строке $val раз(а).<br>";
// }


$freq = [];
$line = "Student, hello";
$len = strlen($line);
for ($i = 0; $i < $len; $i++) {
  $letter = $line[$i];
  if (array_key_exists($letter, $freq)) {
    $freq[$letter]++;
  } else {
    $freq[$letter] = 1;
  }
}
var_dump($freq);


// $str = "Student, hello";

// foreach (count_chars($str, 1) as $strr => $value) {
//    echo chr($strr) . " - $value" . "<br>";
// }
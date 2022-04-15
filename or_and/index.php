<?php

$flag1 = true;
$flag2 = true;

//if ($flag1) {
//    if ($flag2) {
//        echo "<p>Оба флага возвращают true</p>";
//    }
//}
// && - and, || - or;

// if true в скобках включается условие
//if ($flag1 && $flag2) {
//    echo "<p>Оба флага возвращают true</p>";
//}else{
//    echo "<p>Один или оба флага возвращают false</p>";
//}
//
//if ($flag1 || $flag2) {
//    echo "<p>Оба или один флаг возвращают true</p>";
//}else{
//    echo "<p>Один или оба флага возвращают false</p>";
//}

//($content = file_get_contents("../some1/file.txt")) || exit('Ошибка');
//echo $content;

//if (file_get_contents("../some/file.txt")) {
//    $content = file_get_contents("../some/file.txt");
//}
//echo $content;

//                      Условный оператор

//                  x ? y : z
//        true = выраж 2, false = выраж 3
// выражение первое ? выражение 2 : выражение 3
// проверяет выражение 1, если ок, вызывает выражение 2, иначе - выражение 3
$x = 13;
$x = $x > 0 ? $x = 11 : $x; // тернарный оператор
echo $x;
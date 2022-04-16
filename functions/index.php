<?php
// Функції
//                 Параметри         возвр тип данних
function getSum(int $num1, int $num2)    :     int {
    $sum = $num1 + $num2;
    return $sum;
}

//              Аргументи
echo getSum(11, 22) . "<br>";
echo getSum(324436, 54649498) . "<br>";

$aa = 123;
$bb = 321;

echo getSum($aa, $bb);
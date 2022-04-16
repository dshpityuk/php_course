<?php
//              Task 1
//Create 4 functions that will do and return a value

//                  -
function funcMin (int $min1, int $min2) {
    $sumMin = $min1 - $min2;
    return $sumMin;
}
echo funcMin(33,22) . "<hr>";

//                  +
function funcPlus ($plus1, $plus2) : int {
    $sumPlus = $plus1 + $plus2;
    return $sumPlus;
}
echo funcPlus(3,5) . "<hr>";

//                  *
function funcMult(int $mult1, int $mult2) : int {
    $sumMult = $mult1 * $mult2;
    return $sumMult;
}
echo funcMult(12,12) . "<hr>";

//                  /
function funcDiv(int $div1, int $div2) : int {
    $sumDiv = $div1 / $div2;
    return $sumDiv;
}
echo funcDiv(36,3) . "<hr>";

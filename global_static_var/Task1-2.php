<?php
//! Task 1

function getMultv2($num1, $num2) : int{
    global $num3;
    $num3 = $num1 * $num2;
    return $num3;
}
getMultv2(4, 4);
echo $num3 . "<hr>";

//! Task 2 
$num4 = getMultv2(6,6);
echo getMultv2($num4, 3) . "<hr>";
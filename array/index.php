<?php
// Массивы
$arr = array('One', 'Two', 'Three', 10 => 'Hello'); // створення массиву
$arr2 = [11, 22, 33];                // створення массиву
echo $arr[0] . "<br>";
echo $arr[2] . "<br>";
// тег pre, як обрамлення для правильного виводу массива
echo '<pre>';
print_r($arr2);
echo '</pre>';
// порахувати довжину масиву
echo count($arr);
//echo $arr[count($arr) -1];

// присвоєння індексу єлементам массиву
echo '<pre>';
print_r($arr);
echo '</pre>';

// ще один метод створення массиву
$var = "php - 7";

$arr3 = (array) $var;
echo '<pre>';
print_r($arr3);
echo '</pre>';
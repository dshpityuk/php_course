<?php
// Functions param
function getResult($var) {
    $var = $var * 2;
    return $var;
}

$new = 10;
echo getResult($new) . "<br>";
 echo $new . "<hr>";

//             амперсант дублирует параметр
function getResult(&$var) {
    $var = $var + 2;
    return $var;
}

$new1 = 10;
echo getResult($new1) . "<br>";
echo $new1;

// Необязатльные параметры
function getResult($var1 = 2, $var2 = 4) {
    $var = $var1 * $var2;
    return $var;
}
echo getResult() . "<br>";
echo getResult(3) . "<br>";
echo getResult(5, 5) . "<hr>";

// Переменное (или изменяемое) кол-во параметров
// Воспринимается как массив
function mylist(...$items){
    foreach ($items as $val) {
        echo $val . "<br>";
    }
}
mylist('Nick', 'Mike', 'Sara', 'Andrei');
$some = ['PHP', 'Python', 'JS', 'HTML', 'CSS'];
// ... Должно быть как в начале, так и в конце
mylist(...$some);

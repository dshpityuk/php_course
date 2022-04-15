<?php
// массив
$arr = [1, 2, 3];

// розбір массиву на змінні
list($one, $two, $three) = $arr;
echo $two . "<br>";
echo $arr[1];
echo $three . "<hr>";

// Обхід массиву
for ($i=0; $i < count($arr); $i++) {
    echo $arr[$i] . "<br>";
}

$andrei = [
    'name'=> 'Andrei',
    'age'=> 31,
    'weight'=> 73
];

//foreach ($andrei as $key => $value) {
//    echo $key . "-" . $value . "<br>";
//}

//foreach ($andrei as $val) {
//    echo $val . "<br>";
//}

foreach ($arr as $key => $value) {
    echo $key . "-" . $value . "<br>";
}







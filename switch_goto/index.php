<?php

$someText = 'okey';
// switch требует меньше нагрузки, выполняется быстрее если много условий
switch ($someText){
    case 'value':
        echo 'Выражение равно okey-2';
        break;

    case 'okey':
        echo 'Выражение равно okey';
        break;

    default:
        echo 'Выражение не равно okey';
        break;
}

if ($someText == 'value'){
    echo 'Выражение равно okey-2';
}elseif ($someText == 'okey'){
    echo 'Выражение равно okey';
}else{
    echo 'Выражение не равно okey';
}


$num = 100;

switch (true){
    case ($num > 0 && $num <= 50):
        echo "true";
        break;

    case ($num > 0 && $num <= 500):
        echo "true-2";
        break;

    default:
        echo "false";
        break;
}

// Оператор goto

$nums = 1;

bg:
$nums++;
echo "$nums<br>";
if ($nums >= 22) goto fsh;
goto bg;
fsh:



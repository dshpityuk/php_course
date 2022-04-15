<?php

//$flag1 = true;
//$flag2 = true;
//
//switch ($flag1 and $flag2 == true){
//    case true:
//        echo "<p>Один флаг или два флага возвращают true</p>";
//        break;
//
//    default:
//        echo "<p>Один флаг или оба флага возвращают false</p>";
//        break;
//}
//
//switch ($flag1 || $flag2 == true){
//    case true:
//        echo "<p>Оба или один флаг возвращают true</p>";
//        break;
//
//    default:
//        echo "<p>Оба флага возвращают false</p>";
//}

$num = 999;

count:
$num--;
echo "$num<br>";
if ($num <= 8) goto finish;
goto count;
finish:
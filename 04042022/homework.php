<?php
// Задания со звёздочкой...

// task 1
// решил возвести в степень 11 не используя "**" параллельно подкравшись инкрементами
$i = 1;
while ($i <= 11):
    echo "$i\n";
    $i++;
endwhile;
    if ($i = 11){
        echo $i * $i . "\n";
    }
// task 2
// & - вот эта дрочь -  "и битое", сравнивает переменную с сравниваемым числом (сравнивает биты)
$i = 5;
if ($i & 1){
    echo "Число нечётное";
}else{
    echo "чётное";
}
// task 1.1
$a = 11;
if ($a <= 11){
    echo "\n" . $a * $a;
}
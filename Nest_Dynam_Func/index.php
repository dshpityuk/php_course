<?php

// ! ВЛОЖЕННЫЕ И ДИНАМИЧЕСКИЕ Ф-ЦИИ
$arr = [1, 2, 4];

// function box(){
    
//     function inn(){
//         echo "TEST";
//     }
//     inn();
//     echo "<pre>";
//     print_r($arr);
//     echo "</pre>";
// }
// box();

//? Динамическое имя функции

function hello(){
    // return 'Hello';
    echo 'hello';
}

//! В момент записи ф-ции в переменную, она уже отработает
// $var = hello(); 
// echo hello();
// echo $var;
// $var();

//? Анонимные ф-ции
// Когда мы инициализируем ф-цию внутри переменной, нужна ';' в конце, в обычных не нужно

$some = function (...$arr1){
    foreach($arr1 as $val) {
        echo $val . '<br>';
    }
};
// $some(12, 34, 53, 3465, 343);

$var2 = function(){
    echo 'Запуск анонимной ф-ции';
};
$var2();




?>
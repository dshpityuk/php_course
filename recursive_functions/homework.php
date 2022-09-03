<?php
/*
!                 Task 1
?   Write a recursion according to the example of the lesson, where
?   We accept a number as a parameter
?   if it is more than 100, subtract 5 each time and output via echo
?   Run and check for correctness
*/

// function param($num){
//     if ($num > 0) {
//         echo ($num -= 5) . "<br>";
//         param($num);
//     }else return;
// }
// param(100);

/*
!                 Task 2
?   Create a multidimensional array or use one from previous lessons.
?   Write a recursive function to traverse this array, displaying its elements
*/



$people = [
    'Ivan' => [
        'age' => 21, 
        'weight' => 63
    ],
    'Oleg' => [
        'age' => 25, 
        'weight' => 70
    ],
    'Nika' => [
        'age' => 19, 
        'weight' => 53]
];

/* function people($arr) 
{
    foreach ($arr as $key => $name){
        echo "$key :";
        foreach ($name as $key => $value) {
            echo "$key '-' $value";
        }
    }
} */


function people($arr){

    foreach ($arr as $key => $value) {
        
        if (is_array($value)) {
            people($value);
            continue;
        }
        echo "$key : $value";
        echo '<br>';
        
    }
}

people($people);
<?php
//              Task 2

// *Create a function that takes a single integer and inside performs the following operations
//add exactly the same to the selected number
//multiply what you get by 2
//and what happened we divide by 4
//output the result via return

function hurricane($str) : int {
    $tornado = ($str + $str) * 2 / 4;
    return $tornado;
}
echo hurricane(35);

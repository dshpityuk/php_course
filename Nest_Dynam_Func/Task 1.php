<?php

//!             Task 1

$arr = [1, 2, 4]; // <---

function box(){

    global $arr; // <---

    function inn(){
        echo "TEST";
    }
    inn();
    echo "<pre>";
    print_r($arr);
    echo "</pre><br><hr>";
}
box();

//!             Task 2


function fucktion($arr1) {
    echo "$arr1[0] + $arr1[1] = ", $arr1[0]+$arr1[1] . "<br><hr>";
}
fucktion([15, 7]);


//? --------------------------------------------------------

$blablabla =  function () {
    
    echo 2 + 2 * 2 . "<br><hr>";
};
$blablabla();

//!                 Task 3

function sum(...$num){
    
    // array_count_values($num);
    
    print_r(array_sum($num));
    echo "<hr>";
    
}

sum(10, 20, 20);


?>


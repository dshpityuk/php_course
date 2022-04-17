<?php
// Create a function to calculate mathematical operations, simple:
// There are three input parameters:
// first number
// second number
// mathematical symbol (+, -, /, *)
// Inside the function, we take two numbers and do a mathematical operation with them based on the received symbol
// We return the result outside through return
// Task 2 (make a calculator?)
function calC(int $var1, $var2, int $var3){
    if ($var2 == '+'){
        $output = $var1 + $var3;
    }elseif ($var2 == '-'){
        $output = $var1 - $var3;
    }elseif ($var2 == '*'){
        $output = $var1 * $var3;
    }elseif ($var2 == '/'){
        $output = $var1 / $var3;
    }else{
        echo "Ошибка!";
    }
    return $output;
}

echo calC(15,'*',5);

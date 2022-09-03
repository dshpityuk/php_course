<?php
//! global variables (evil...)

function getSum(){
    global $var;
    $var = 2;   // local var
    return $var;
}

$var = 5;       // external var

echo getSum() . "<br>";
echo $var . "<hr>";

// static var
function calculator(){ // the function is re-initialized when called
    static $start = 0; // static -  allows this initialization to be removed
    return ++$start;
}
echo calculator();
echo calculator() . "<hr>";

// return arrays functions
// any func can return arrays
    function myFriends(){
        $kate = 'kate';
        $nick = 'Nick';
        $vadim = 'Vadim';

        return [$kate, $nick, $vadim];
    }
    echo "<pre>";
    print_r(myFriends());
    echo "</pre>";


<?php
//   Task 3 (**Create a function with one parameter representing the username (string).
//inside the function check the current time
//22:00 - 06:00 - good night
//07:00 - 16:00 - good afternoon
//17:00 - 21:00 - good evening
//add a greeting to the name depending on the time)
function myName(string $name = ""){
    date_default_timezone_set('Europe/Kiev');
    $date = date('H');
        if ($date > 22 and $date < 6){
            echo "Good night, ";
        }elseif ($date > 7 and $date < 16){
            echo "Good morning, ";
        }elseif ($date > 17 and $date < 21){
            echo "Good day, ";
        }else{
            echo "Good evening, ";
        }
    return $name;
}
echo myName('Dima') . "!";
<?php
//   Task 3 (**Create a function with one parameter representing the username (string).
//inside the function check the current time
//22:00 - 06:00 - good night
//07:00 - 16:00 - good afternoon
//17:00 - 21:00 - good evening
//add a greeting to the name depending on the time)
function myName(string $name = ""){
    date_default_timezone_set('Europe/Kiev');
    $date = date('H:i');
        if ($date > '22:00' and $date < '6:00'){
            echo "Good night, ";
        }elseif ($date > '7:00' and $date < '16:00'){
            echo "Good day, ";
        }elseif ($date > '17:00' and $date < '21:00'){
            echo "Good evening, ";
        }else{
            echo "Something wrong";
        }

    return $name;
}
echo myName('Dima') . "!";
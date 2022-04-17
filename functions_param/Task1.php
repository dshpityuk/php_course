<?php
//      Task 1
// Create an array with the names of your friends
//Create a function that will take an array of arguments and inside each element of the array will output to the browser with a greeting and the name of a friend
function greetingFriends(...$var){
    foreach ($var as $val){
        echo "Hi" . ',' . "$val!<br>";
    }
}

$friends = ['Joey', 'Ross', 'Monica', 'Rachel', 'Phoebe', 'Chandler'];
greetingFriends(...$friends);
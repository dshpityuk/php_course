<?php
//                              Task 1
$i = 77;
while (true) {
    $i--;
    if ($i < 7) break;
    echo "$i <br>";
}

//                              Task 2
$u = 'a';
while ($u <= 'y'){
    echo "$u <br>";
    $u++;
}

//                              Task 3**
$a = 25;
while ($a--) {
    echo "$a <br>";
    if ($a % 2 == 1) {
        echo "Число чётное";
    }else{
        echo "Число не чётное";
    }
}


<?php
// цикл while

//while (условие){  // true || false
//    #operators;
//}

$i = 10;
while ($i <= 200) {
    echo "$i <br>";
    $i++;

}

while (true){
    $i++;
    // здесь будет условие выхода из цикла
    if ($i > 20) break;
    echo "$i <br>";
}

while ($i--) { // 10, 9, 6, etc = true 0 = false
    echo "$i <br>";
}
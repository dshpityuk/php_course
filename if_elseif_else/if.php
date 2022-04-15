<?php

// условный оператор if

//$mob = 2;
//if ($mob == 1) {
//    echo "Нужно прикупить ещё 1 телефон";
//}elseif ($mob == 2) {
//    echo "У меня дотаточно телефонов";
//}elseif ($mob == 3 || $mob > 1){
//    echo "У меня много телефонов продам 1";
//}else{
//    echo "Мне не повезло, у меня нет телефона";
//}

$alpha = 'a';
if ($alpha == 'b'):
    ?>
<h1>Обычный HTML h1</h1>
<?php

elseif ($alpha == 'a'):
    ?>
<h2>Обычный HTML h2</h2>
<?php

else:
    ?>
<h3>Обычный HTML h3</h3>
<?php
    endif;

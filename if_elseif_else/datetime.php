<?php

date_default_timezone_set('Europe/Kiev');
$time = date('H:i');

echo $time . "<br />";

$timeis = 0;

if($time >= 6 and $time <= 12) {
    $timeis = 1;
}elseif($time >= 12 and $time <= 18) {
    $timeis = 2;
}elseif($time >= 18 and $time <= 24) {
    $timeis = 3;
}else
    $timeis = 4;

echo $timeis . "<br /><hr />";


if ($timeis == 1):
    ?>
<h1>Сейчас утро</h1>
<?php
elseif ($timeis == 2):
?>
<h2>Сейчас день</h2>
<?php
elseif ($timeis == 3):
?>
<h3>Сейчас вечер</h3>
<?php
    else:
    ?>
<h4>Сейчас ночь</h4>
<?php
    endif;
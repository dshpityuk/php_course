<?php

$year = [ 2000, 2001, 2002, 2003, 2004, 2005, 2006, 2007, 2008, 2009, 2010, 2011, 2012, 2013, 2014, 2015, 2016, 2017, 2018, 2019, 2020 ];
$month = [ 'Січень', 'Лютий', 'Березень', 'Квітень', 'Травень', 'Червень', 'Липень', 'Серпень', 'Вересень', 'Жовтень', 'Листопад', 'Грудень' ];
$day = [ 'Понеділок', 'Вівторок', 'Середа', 'Четвер', "П'ятниця", 'Суббота', 'Неділя' ];

//                          Task 1
$rand_year = array_rand($year, 1);
$rand_month = array_rand($month, 1);
$rand_day = array_rand($day, 1);
echo $year[$rand_year]  . '<br>', $month[$rand_month]  . '<br>', $day[$rand_day]  . '<br><hr>';

//                          Task 2
print_r($year[4]  . '<br>');
print_r($month[4]  . '<br>');
print_r($day[4]  . '<br>');
?>
<hr>
<?php

//                          Task 3

echo $year[count($year) -1 ]  . '<br>', $month[count($month) -1] . '<br>', $day[count($day) -1] . '<hr>';
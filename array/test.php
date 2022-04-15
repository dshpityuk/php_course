<?php

$input = array("Neo", "Morpheus", "Trinity", "Cypher", "Tank");
$rand_keys = array_rand($input, 3);

echo $input[$rand_keys[0]] . "\n";
echo $input[$rand_keys[1]] . "\n";
echo $input[$rand_keys[2]] . "\n";

$year = [ 2000, 2001, 2002, 2003, 2004, 2005, 2006, 2007, 2008, 2009, 2010, 2011, 2012, 2013, 2014, 2015, 2016, 2017, 2018, 2019, 2020 ];
$month = [ 'Січень', 'Лютий', 'Березень', 'Квітень', 'Травень', 'Червень', 'Липень', 'Серпень', 'Вересень', 'Жовтень', 'Листопад', 'Грудень' ];
$day = [ 'Понеділок', 'Вівторок', 'Середа', 'Четвер', "П'ятниця", 'Суббота', 'Неділя' ];

$rand_year = array_rand($year, 1);
$rand_month = array_rand($month, 1);
$rand_day = array_rand($day, 1);
echo $year[$rand_year], $month[$rand_year], $day[$rand_day];
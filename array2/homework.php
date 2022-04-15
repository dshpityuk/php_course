<?php
//$names = ['Anna', 'Irina', 'Kolya', 'Vasya', 'Dima', 'Sergey', 'Kira', 'John', 'Nick', 'Lisa'];
//$wv = [
//    'owner' => 'Teemo',
//    'item' => 'car',
//    'color' => 'red',
//    'weight' => 1600,
//    'type' => 'lightweight',
//    'speed' => 190,
//    'places' => 4,
//    'doors' => 5,
//    'country' => 'Germany',
//    'mileage' => 3000
//];
$year = [
    'January' => ['SUN' => 'Sunday', 'MON' => 'Monday', 'TUE' => 'Tuesday', 'WED' => 'Wednesday', 'THU' => 'Thursday', 'FRI' => 'Friday', 'SAT' => 'Saturday'],
    'February' => ['SUN' => 'Sunday', 'MON' => 'Monday', 'TUE' => 'Tuesday', 'WED' => 'Wednesday', 'THU' => 'Thursday', 'FRI' => 'Friday', 'SAT' => 'Saturday'],
    'March' => ['SUN' => 'Sunday', 'MON' => 'Monday', 'TUE' => 'Tuesday', 'WED' => 'Wednesday', 'THU' => 'Thursday', 'FRI' => 'Friday', 'SAT' => 'Saturday'],
    'April' => ['SUN' => 'Sunday', 'MON' => 'Monday', 'TUE' => 'Tuesday', 'WED' => 'Wednesday', 'THU' => 'Thursday', 'FRI' => 'Friday', 'SAT' => 'Saturday'],
    'May' => ['SUN' => 'Sunday', 'MON' => 'Monday', 'TUE' => 'Tuesday', 'WED' => 'Wednesday', 'THU' => 'Thursday', 'FRI' => 'Friday', 'SAT' => 'Saturday'],
    'June' => ['SUN' => 'Sunday', 'MON' => 'Monday', 'TUE' => 'Tuesday', 'WED' => 'Wednesday', 'THU' => 'Thursday', 'FRI' => 'Friday', 'SAT' => 'Saturday'],
    'July' => ['SUN' => 'Sunday', 'MON' => 'Monday', 'TUE' => 'Tuesday', 'WED' => 'Wednesday', 'THU' => 'Thursday', 'FRI' => 'Friday', 'SAT' => 'Saturday'],
    'August' => ['SUN' => 'Sunday', 'MON' => 'Monday', 'TUE' => 'Tuesday', 'WED' => 'Wednesday', 'THU' => 'Thursday', 'FRI' => 'Friday', 'SAT' => 'Saturday'],
    'September' => ['SUN' => 'Sunday', 'MON' => 'Monday', 'TUE' => 'Tuesday', 'WED' => 'Wednesday', 'THU' => 'Thursday', 'FRI' => 'Friday', 'SAT' => 'Saturday'],
    'October' => ['SUN' => 'Sunday', 'MON' => 'Monday', 'TUE' => 'Tuesday', 'WED' => 'Wednesday', 'THU' => 'Thursday', 'FRI' => 'Friday', 'SAT' => 'Saturday'],
    'November' => ['SUN' => 'Sunday', 'MON' => 'Monday', 'TUE' => 'Tuesday', 'WED' => 'Wednesday', 'THU' => 'Thursday', 'FRI' => 'Friday', 'SAT' => 'Saturday'],
    'December' => ['SUN' => 'Sunday', 'MON' => 'Monday', 'TUE' => 'Tuesday', 'WED' => 'Wednesday', 'THU' => 'Thursday', 'FRI' => 'Friday', 'SAT' => 'Saturday']
];
//echo "<pre>";
//print_r($year);
//echo "</pre>";

//echo "On the first {$year['July']['SUN']} july I arrived in the Carpathian mountains, and in early May, on {$year['May']['MON']} i was already in Crimea.";

foreach ($year as $key => $month) {
    echo "<h2 style='color: navy'>$key</h2>";
    foreach ($month as $key => $value) {
        echo "<b style='color: red'>$key</b>" . "-" . $value . "<br>";
    }
}

//foreach ($year as $key => $value){
//    echo $key . "<br>";
//    foreach ($value as $val => $days) {
//        echo $val . "-" . $days . "<br>";
//    }
//    echo "<hr>";
//}

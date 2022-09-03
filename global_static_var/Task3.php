<?php
//! Task 3
function dateName($name, int $age){
    $month = $age * 12;
    $days = $age * 365;
    return ['Name' => $name, 'Age' => $age, 'Month' => $month, 'Days' => $days];
}

echo "<pre>";
print_r(dateName("Dima", 30));
echo "</pre>";


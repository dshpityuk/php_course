<?php
// Task 1 (вивести рандомний єлемент массиву)
$arr1 = [1, 2, 3, 4, 5, 6];
echo array_rand($arr1) . "<br>";

// Task 2 (array_keys_exists)
if (array_key_exists(6, $arr1)){
    echo "ключ 6 існує у массиві";
}else{
    echo "ключ 6 не існує у массиві";
}

// Task 3 (Create an array with numbers from 0 to 20. Checking each number, if there is no remainder after dividing by 2, then we add it to the new array)

$arr2 = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];
$arr3 = [];
foreach ($arr2 as $value){
   if ($value % 2 == 0){
       array_push($arr3, $value);
   }
}
echo "<pre>";
print_r($arr3);
echo "</pre>";

// Task 4 (*Create a text file with the names of the months. Look up the file() function in the PHP documentation, learn how to use it, and create it with arrays of module names from text file attributes.)
$file = file('file.txt');
echo "<pre>";
print_r($file);
echo "</pre>";

// Task 5 (Create an array with a random number of elements from 5 to 10, whose elements take on a random value from 0 to 100. Sort the elements of the array in order from smallest to largest values)

for ($i = 0; $i < mt_rand(5,10); $i++){
    $array[] = mt_rand(5,10);
    asort($array);
}
echo "<pre>";
print_r($array);
echo "</pre>";
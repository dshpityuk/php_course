<?php
// массиви
// асоціативні та багатовимірні масиви
$arr = ['name' => 'Dima', 'age' => 30];
$arr2 = ['Dima', 30];

// багатовимірні масиви
$people = [
    'Ivan' => ['age' => 21, 'weight' => 63],
    'Oleg' => ['age' => 25, 'weight' => 70],
    'Nika' => ['age' => 19, 'weight' => 53]
];
echo $people['Oleg']['weight'] . "<br>";

// інтерполяція єлемента массиву в строку
$arr3['time'] = 10;
echo "Зараз у нас $arr3[time] ранку" . "<br>";
echo "Олег имеет вес в {$people['Oleg']['weight']} кг.";



<?php
$flowers = array (array ('розы', 100, 15),
    array ('тюльпаны', 60, 25),
    array ('орхидеи', 180, 7));

echo $flowers[0][0].' цена '.$flowers[0][1].' kol '.$flowers[0][2].'<br/>';
echo $flowers[1][0].' цена '.$flowers[1][1].' kol '.$flowers[1][2].'<br/>';
echo $flowers[2][0].' цена '.$flowers[2][1].' kol '.$flowers[2][2].'<br/>';

echo '<ol>';
for ($row = 0; $row < 3; $row++) {
    echo "<li><b> Номер строки $row</b>";
    echo '<ul>';
    for ($col = 0; $col < 3; $col++) {
    echo "<li><b> $flowers[$row][$col]</b>";
    echo '</li>';
    }
    echo '</ul>';
    echo '</li>';
}
echo '</ol>';

$flowers = array (array ('назв' => 'розы', 'цена' => 100, 'кол' => 15),
    array ('назв' => 'тюльпаны', 'цена' => 60, 'кол' => 25),
    array ('назв' => 'орхидеи', 'цена' => 180, 'кол' => 7));

for ($row = 0; $row < 3; $row++) {
    echo $flowers[$row]['назв']. ' цена '.$flowers[$row]['цена']. ' kol '.$flowers[$row]['кол'];
    echo '<br/>';
}

echo '<ol>';
for ($row = 0; $row < 3; $row++) {
    echo "<li><b> Номер строки $row</b>";
    echo '<ul>';
    foreach  ($flowers[$row] as $key => $value) {
    echo "<li>$value</li>";    
    }
    echo '</ul>';
    echo '</li>';
}
echo '</ol>';

$arr = [['имя', 'профессия', 'зарплата'], 
        ['вася', 'слесарь', 2500], 
        ['миша', 'строитель', 3000], 
        ['андрей', 'шофер', 2700]];

echo $arr[0][0].'|'.$arr[0][1].'|'.$arr[0][2].'<br/>';
echo $arr[1][0].'|'.$arr[1][1].'|'.$arr[1][2].'<br/>';
echo $arr[2][0].'|'.$arr[2][1].'|'.$arr[2][2].'<br/>';
echo $arr[3][0].'|'.$arr[3][1].'|'.$arr[3][2].'<br/>';

for ($row = 0; $row < 4; $row++) {
    for ($col = 0; $col < 3; $col++) {
    echo $arr[$row][$col].' | ';
    }
    echo '<br/>';
}
echo '<br/>';

for ($row = 1; $row <= 9; $row++) {
    for ($col = 1; $col <= 9; $col++) {
    echo $row * $col.' | ';
    }
    echo '<br/>';
}

echo '<br/>';
$start = 2;
$end = 10;
$array1 = array_fill($start, $end - $start + 1, array_fill($start, $end - $start + 1, 0));
foreach ($array1 as $mult1 => &$row) {
    foreach ($row as $mult2 => &$result) {
        $result = $mult1 * $mult2;    
    }    
}

for ($row = 2; $row <= 9; $row++) {
    for ($col = 2; $col <= 9; $col++) {
    echo $array1[$row][$col].' | ';
    }
    echo '<br/>';
}
echo '<br/>';

$array2 =[];
for ($row = 1; $row <= 9; $row++) {
    for ($col = 1; $col <= 9; $col++) {
    $array2[$row][$col] = $row * $col;
    }
}
echo '<br/>';

for ($row = 1; $row <= 9; $row++) {
    for ($col = 1; $col <= 9; $col++) {
    echo $array2[$row][$col].' | ';
    }
    echo '<br/>';
}
echo '<br/>';
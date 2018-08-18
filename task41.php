<?php
/* 
4. Создать новый массив, который является зеркальным переворотом 
массива ([1, 2, 3, 4] -> [4, 3, 2, 1]).
 */
$array = [1, 2, 3, 4];
$arraynew = [];
$i = 0;
foreach ($array as $v){
    $arraynew[] = array_pop($array);
}
print_r($arraynew);

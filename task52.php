<?php
/* 
4. Дан двумерный массив, содержащий отрицательные и 
положительные числа. Выведете на экран индексы тех ячеек 
массива, которые содержат отрицательные числа.
 */

$arr = [[-4, 5, -1, 7], [9, 5, -2, 8], [2, -3, -7, 9]];
for ($i = 0; $i <= 2; $i++){
    foreach ($arr[$i] as $k => $v){
        if ($v < 0) {
            echo "индексы ячейки [$i, $k], где число < 0 (".$arr[$i][$k], ')<br/>';
        }
    }
}

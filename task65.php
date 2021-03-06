<?php
/* 
 8. Написать программу решения задачи о ханойской башне. В одной из древних легенд говорится следующее. «В храме Бенареса находится бронзовая плита 
 с тремя алмазными стержнями. На один из стержней бог при сотворении мира нанизал 64 диска разного диаметра из чистого золота так, что наибольший 
 диск лежит на бронзовой плите, а остальные образуют пирамиду, сужающуюся кверху. Это – башня Брамы. Работая день и ночь, жрецы переносят диски с 
 одного стержня на другой, следуя законам Брамы:
1. диски можно перемещать с одного стержня на другой только по одному;
2. нельзя класть больший диск на меньший.
Когда все 64 диска будут перенесены с одного стержня на другой, и башня, и храмы, и жрецы-брамины превратятся в прах, и наступит конец света».
Эта древняя легенда породила задачу о Ханойской башне: переместить m дисков с одного из трех стержней на другой, соблюдая «законы Брамы».
 */
$m = 5;
$arr1 = [];
for ($j = $m; $j > 0; $j--){
    $arr1[] = $j;
}
$arr2 = [];
$arr3 = [];
function move($m, &$from, &$to, &$via) {
    if ($m === 1) {
        echo "Move disk from pole ";
        print_r($from);
        echo 'to pole ';
        print_r($to);
        echo "<br/>";
        array_push($to, array_pop($from));
    } else {
        move($m-1, $from, $via, $to);
        move(1, $from, $to, $via);
        move($m-1, $via, $to, $from);
    }
}
move($m, $arr1, $arr2, $arr3);
print_r($arr2);

<?php
/* 
2. Есть массив $arr = array(“frst”=>45, “second”=>76, 
“third”=>12). Написать функцию, чтобы получить массив, 
элементами которого являются ключи массива $arr.
 */
$arr = ['first' => 45, 'second' => 76, 'third' => 12];

function getArray($arr)
{
    $arrnew = [];
    foreach ($arr as $k => $v){
        $arrnew[] = $k;
    }
    print_r($arrnew);
}

getArray($arr);
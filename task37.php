<?php
$weekdays = array('понедельник', 'вторник', 'среда', 'четверг', 'пятница');
var_dump($weekdays);
echo '<br/>';
print_r($weekdays);
echo '<br/>';
$str = 'hello world';
$arr1 = str_split($str);
$arr2 = str_split($str, 3);
print_r($arr1);
echo '<br/>';
print_r($arr2);
echo '<br/>';
$array = array('lastname', 'email', 'phone');
$comma = implode(',', $array);
echo $comma;
echo '<br/>';
$comma2 = implode('', $array);
echo $comma2;
echo '<br/>';
$comma3 = implode('***', $array);
echo $comma3;
$pizza = 'piece1 piece2 piece3 piece4 piece5';
$pieces = explode(' ', $pizza);
echo $pieces[0];
echo $pieces[1];
$data = 'foo:*:1023:1000::/home/foo:/bin/sh';
list($user, $pass, $uid, $gid, $gekos, $home, $shell) = explode(':', $data);
echo rand(-20, 40);
$my_array = ['sun' => 'light',
    'byke' => 'right',
    10 => 'house',
    -5 => 290];
var_dump($my_array);
$my_arr = array(10, 20, 30);
unset($my_arr[1]);
var_dump($my_arr);
$my_arr4 = array (1,2,3,4,5);
foreach ($my_arr4 as $value){
    echo $value, ' ';
}
foreach ($my_arr4 as $key => $value){
    echo "[$key] => ", $value, '<br/>';
}
$my_arr5 = array (1,2,3,4,5);
foreach ($my_arr5 as &$value){
    echo $value*=2;
}
unset($value);
var_dump($my_arr5);
$my_arr6 = array (1,2,3,4,5);
foreach ($my_arr6 as &$value2){
    echo $value2, ' ';
}
$value2 = '100';
echo '<br/>';
foreach ($my_arr6 as &$value2){
    echo $value2, ' ';
}
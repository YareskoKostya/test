<?php
/* 
3. Создайте двумерный массив. Первые два ключа - это 'ru' и 'en'. 
Пусть первый ключ содержит элемент, являющийся массивом 
названий дней недели по-русски, а второй - по-английски.  В 
переменной $lang хранится язык (она принимает одно из 
значений или 'ru', или 'en' - либо то, либо то), а в 
переменной $day - номер дня. Выведите словом день недели, 
соответствующий переменным $lang и $day. То есть: если, к 
примеру, $lang = 'ru' и $day = 3 - то выведем 'среда'.
 */

function getDay($lang, $day)
{
    $arr = ['ru' => ['понедельник', 'вторник', 'среда', 'четверг', 'пятница', 'суббота', 'воскресенье'], 
    'en' => ['monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday', 'sunday']];
    for ($i = 1; $i <= 7; $i++) {
        if ($i == $day) {
            echo $arr[$lang][$i - 1];
        }
    }    
}

getDay('en', 5);

<?php
header('Content-Type: text/html; charset=utf-8');
//2) Вычислить периметр и площадь прямоугольника если вторая сторона в 4 раза больше первой (первую сторону придумать самому)
$a = 10;
$b = $a * 4;
echo "Периметр прямоугольника - ".(2 * $a + 2 * $b).". Площадь - ".($a * $b);
echo "<br/>";
// 3) Дано два числа. Вывести значение результата в логической переменной, которое определяет,  отличаются ли первое от второго на 10.(ответ true или false) 
$x = 5;
$y = 15;
echo (($x - $y == 10) | ($y - $x == 10)) ? "true" : "false";
echo "<br/>";
//4) Даны три числа. Найдите их среднее арифметическое, умножить его на 4 и сравнить с каждым из чисел. (ответ true или false + сами числа) 
$one = 3;
$two = 45;
$three = 22;
echo ((($one + $two + $three) / 3 * 4) == ($one | $two | $three)) ? "true" : "false";
echo "<br/>";
//5) Дано число. Увеличьте его на 30%, на 120% и сравнить среднее арифметическое результатов с первоначальным числом  (ответ true или false + сами числа) 
$number = 27;
echo (($number + $number * 1.3 + $number * 2.2) / 3) == $number ? "true" : "false";
echo "<br/>";
//6) Найти сумму квадратов  36% от первого числа и 87% от второго числа
$first = 7;
$second = 13;
echo (0.36 * $first) * (0.36 * $first) + (0.87 * $second) * (0.87 * $second);
echo "<br/>";
//7) Дано трехзначное число. Найдите сумму его цифр ( с помощью отделения единиц, десятков,сотен ). Например: есть число 123, то программа должна вычислить сумму цифр 1, 2, 3, т. е. 6.
$abc = 257;
(integer) $hud = $abc / 100;
(integer) $doz = ($abc - (integer) $hud * 100) / 10;
(integer) $unit = $abc -  (integer) $hud * 100 -  (integer) $doz * 10;
echo  (integer) $hud +  (integer) $doz +  (integer) $unit;
echo "<br/>";
<?php
/* 
 5. Напишите функцию op(), которая принимает три аргумента: $num1 и
$num2 – числовые, $operator – символ, обозначающий
операцию. Функция должна возвращать результат выполнения
оператора $operator над $num1 и $num
 */
function op($num1, $num2, $oper)
{
    if ($oper == '+'){
        $s = $num1 + $num2;
    } elseif ($oper == '-'){
        $s = $num1 - $num2;
    } elseif ($oper == '*'){
        $s = $num1 * $num2;
    } elseif ($oper == '/'){
        $s = $num1 / $num2;
    }
    return $s;
}
echo op(5, 3, '-');
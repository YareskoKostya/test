<?php
/* 
11) Необходимо написать программу, которая проверяет пользователя на знание 
таблицы умножения. Пользователь сам вводит два целых однозначных числа. 
Программа задаёт вопрос: результат умножения первого числа на второе. 
Пользователь должен ввести ответ и увидеть на экране правильно он ответил или 
нет. Если нет – показать еще и правильный результат.
 */
?>
<html>
    <body>
        <form method="GET">
            первое число: <input type="text" name="one" value="<?php echo $_GET['one']?>"><br/>
            второе число: <input type="text" name="sec" value="<?php echo $_GET['sec']?>"><br/>
            результат умножения двух чисел: <input type="text" name="mult" value="<?php echo $_GET['mult']?>"><br/>
            <input type="submit" value="отправить">
        </form>
        <?php
    $one = $_GET['one'];
    $sec = $_GET['sec'];
    $mult = $_GET['mult'];
    if ($mult == $one * $sec) echo 'правильно';
    else echo 'неправильно, ответ - ' . ($one * $sec);
       ?>
    </body>
</html>
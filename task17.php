<?php
/* 
 13)Ученик вводит с клавиатуры число, символ арифметического действия (+, -, *, /) и 
еще одно число. Компьютер должен напечатать результат
 */
?>
<html>
    <body>
        <form method="GET">
            ввести:<br/>
            первое число <input type="text" name="x" value="<?php echo $_GET['x']?>"><br/>
            арифм. действие <input type="text" name="mat" value="<?php echo $_GET['mat']?>"><br/>
            второе число <input type="text" name="y" value="<?php echo $_GET['y']?>"><br/>
            <input type="submit" value="отправить">
        </form>
        <?php
    $x = $_GET['x'];
    $y = $_GET['y'];
    $mat = $_GET['mat'];
    if ($mat == '+') echo $x + $y;
    elseif ($mat == '-') echo $x - $y;
    elseif ($mat == '/') echo $x / $y;
    elseif ($mat == '*') echo $x * $y;
    else echo 'введите числа и арифм. действие (+, -, /, *)';
       ?>
    </body>
</html>

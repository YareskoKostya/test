<?php

/* 
8) Угадать число от 1 до 10 которое введёт пользователь, путём деления пополам.
 */

?>
<html>
    <body>
        <form method="GET">
            загаданное число от 1 до 10: <input type="text" name="num" value="<?php echo $_GET['num']?>"><br/>
            угадать число: <input type="text" name="guess"><br/>
            <input type="submit" value="отправить">
        </form>
        <?php
    $num = $_GET['num'];
    $guess = $_GET['guess'];
    if ($guess > $num) echo "больше";
    elseif ($guess < $num) echo "меньше";
    else echo "угадал";
       ?>
    </body>
</html>
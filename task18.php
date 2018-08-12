<?php
/* 
14)Определить, можно ли квадрат со стороной a вписать в окружность заданного 
радиуса R.
 */
?>
<html>
    <body>
        <form method="GET">
            ввести:<br/>
            сторона квадрата <input type="text" name="a" value="<?php echo $_GET['a']?>"><br/>
            радиус окружности <input type="text" name="R" value="<?php echo $_GET['R']?>"><br/>
            <input type="submit" value="отправить">
        </form>
        <?php
    $a = $_GET['a'];
    $R = $_GET['R'];
    if ($R == $a / sqrt(2)) echo 'квадрат можно вписать в окружность';
    else echo 'квадрат нельзя вписать в окружность';
       ?>
    </body>
</html>


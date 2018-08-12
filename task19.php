<?php
/* 
 15)Даны два числа - сторона и площадь квадрата. Определить, существует ли квадрат 
с такой стороной и площадью.
 */
?>
<html>
    <body>
        <form method="GET">
            ввести:<br/>
            сторона квадрата <input type="text" name="a" value="<?php echo $_GET['a']?>"><br/>
            площадь квадрата <input type="text" name="S" value="<?php echo $_GET['S']?>"><br/>
            <input type="submit" value="отправить">
        </form>
        <?php
    $a = $_GET['a'];
    $S = $_GET['S'];
    if ($a == sqrt($S)) echo 'квадрат с такой стороной и площадью существует';
    else echo 'квадрат с такой стороной и площадью не существует';
       ?>
    </body>
</html>
<?php
/* 
12)Определить четверть координатной плоскости, которой принадлежит точка. 
Координаты точки ввести с клавиатуры.
 */
?>
<html>
    <body>
        <form method="GET">
            ввести координаты:<br/>
            x <input type="text" name="x" value="<?php echo $_GET['x']?>"><br/>
            y <input type="text" name="y" value="<?php echo $_GET['y']?>"><br/>
            <input type="submit" value="отправить">
        </form>
        <?php
    $x = $_GET['x'];
    $y = $_GET['y'];
    if ($x > 0 && $y > 0) echo "I четверть";
    elseif ($x < 0 && $y > 0) echo "II четверть";
    elseif ($x < 0 && $y < 0) echo "III четверть";
    elseif ($x > 0 && $y < 0) echo "IV четверть";
    else echo 'ноль'
       ?>
    </body>
</html>

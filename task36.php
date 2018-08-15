<?php
/* 
 12. Вывести таблицу значений функции y = -0.23x2 + x. Значения аргумента (x) задаются минимумом, максимумом и 
шагом. Например, если минимум задан как 1, максимум равен 3, а шаг 0.5, тогда надо вывести на экран 
изменение x от 1 до 3 с шагом 0.5 (1, 1.5, 2, 2.5, 3) и значения функции (y) при каждом значении x.
 */
?>
<html>
    <body>
        <form method="GET">
            ввести минимум<br/>
            <input type="text" name="min" value="<?php echo $_GET['min']?>"><br/>
            ввести максимум<br/>
            <input type="text" name="max" value="<?php echo $_GET['max']?>"><br/>
            ввести шаг<br/>
            <input type="text" name="s" value="<?php echo $_GET['s']?>"><br/>
            <input type="submit" value="отправить">
            </form>        
        <?php
        $max = $_GET['max'];
        $min = $_GET['min'];
        $s = $_GET['s'];        
        ?>
        <table border="1">
            <tr>
            <td>x</td>
            <?php
            for ($i = $min; $i <= $max; $i+=$s){
            ?><td><?php echo $i?></td>
            <?php }?>
            </tr>
            <tr>
            <td>y</td>
            <?php
            for ($i = $min; $i <= $max; $i+=$s){
            ?><td><?php echo (-0.23 * $i * $i + $i)?></td>
            <?php }?>
            </tr>
        </table>   
    </body>
</html>

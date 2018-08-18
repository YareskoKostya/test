<?php
/* 
6. Найти в массиве чисел элементы с наибольшим(max) и 
наименьшим(min) значениями. Вывести эти 2 элемента на экран, а 
также посчитать и вывести сумму всех остальных элементов (min и max 
в сумму не входят).
 */
?>
<html>
    <body>
        <form method="GET">
            ввести числа<br/>
            <input type="text" name="a" value="<?php echo $_GET['a']?>"><br/>
            <input type="submit" value="отправить">
        </form>
        <?php
        $a = $_GET['a'];
        $array = explode(' ', $a);
        $sum = 0;
        $max = $array[0];
        $min = $array[0];
        foreach ($array as $v) {
            if ($v > $max) $max = $v;
            if ($v < $min) $min = $v;
        }
        foreach ($array as $v) {
            if ($v !== $max && $v !== $min) $sum += $v;
        }
        print_r($array);
        echo "<br/>элементы с наибольшим значением - $max и наименьшим - $min<br/>";
        echo "суммa всех остальных элементов - $sum";
        ?>
    </body>
</html>

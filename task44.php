<?php
/* 
7. Разработайте алгоритм, обнаруживающий в массиве все пары целых 
чисел, сумма которых равна заданному значению.
 */
?>
<html>
    <body>
        <form method="GET">
            ввести числа массива<br/>
            <input type="text" name="a" value="<?php echo $_GET['a']?>"><br/>
            ввести число<br/>
            <input type="text" name="b" value="<?php echo $_GET['b']?>"><br/>
            <input type="submit" value="отправить">
        </form>
        <?php
        $a = $_GET['a'];
        $b = $_GET['b'];
        $array = explode(' ', $a);
        foreach ($array as $v) {
            foreach ($array as $n) {
                if ($b == $v + $n && $n !== $x) {
                    $x = $v;
                    echo "пара $v, $n равна $b<br/>";
                }
            }
        }        
        ?>
    </body>
</html>

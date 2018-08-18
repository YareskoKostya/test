<?php
/* 
3. Заменить все большие 7 элементы массива на 7. Подсчитать количество 
таких элементов.
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
        $i = 0;
        foreach ($array as &$v){
            if ($v > 7) {
                $v = 7;
                $i++;
            }
        }
        unset($v);
        print_r($array);
        echo '<br/>количество элементов - ', $i;        
        ?>
    </body>
</html>
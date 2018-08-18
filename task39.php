<?php
/* 
2. Найти среднее арифметическое элементов с нечетными номерами.
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
        $b = explode(' ', $a);
        $sum = 0;
        $i = 0;
        foreach ($b as $k => $v){
            if ($k % 2 !== 0) {
                $sum += $v;
                $i++;
            }
        }
        echo 'среднее арифметическое элементов с нечетными номерами - ', $sum / $i;        
        ?>
    </body>
</html>
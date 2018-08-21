<?php
/* 
5. Пользователь вводит с клавиатуры натуральное число большее 
3, которое сохраняется в переменную n. Создать массив из nxn 
случайных целых чисел из отрезка [0;n] и вывести его на экран. 
Создать второй массив только из чётных элементов первого 
массива, если они там есть, и вывести его на экран. 
 */
?>
<html>
    <body>
        <form method="GET">
            ввести числo > 3<br/>
            <input type="text" name="a" value="<?php echo $_GET['a']?>"><br/>
            <input type="submit" value="отправить">
        </form>
        <?php
        $n = $_GET['a'];
        $arr = [];
        for ($i = 0; $i < $n; $i++){
            for ($j = 0; $j < $n; $j++){
                $arr[$i][$j] = rand(0, $n);
            }
        }
        //print_r($arr);
        for ($i = 0; $i < $n; $i++){
            for ($j = 0; $j < $n; $j++){
                echo $arr[$i][$j].' | ';
            }
            echo '<br/>';
        }
        echo '<br/>';
        $arrnew = [];
        for ($i = 0; $i < $n; $i++){
            foreach ($arr[$i] as $k => $v){
                if ($v % 2 == 0) $arrnew[] = $arr[$i][$k];
            }
        }
        //print_r($arrnew);
        foreach ($arrnew as $k => $v){
            echo $arrnew[$k].' | ';
        }
        ?>
    </body>
</html>
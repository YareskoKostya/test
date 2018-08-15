<?php
/* 
 10. Сформировать из введенного числа обратное по порядку входящих в него цифр и вывести на 
экран. Например, если введено число 3486, то надо вывести число 6843.
 */
?>
<html>
    <body>
        <form method="GET">
            ввести число <br/>
            <input type="text" name="num" value="<?php echo $_GET['num']?>"><br/>
            <input type="submit" value="отправить">
        </form>
        <?php
    $num = $_GET['num'];
    $len = mb_strlen((string)$num);
    for ($n = $len - 1; $n >= 0; $n--){
        $x = $num[$n];
        $m .= $x;
    }
    echo $m;
     ?>
    </body>
</html>

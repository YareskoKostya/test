<?php
/* 
10)Дано целое число, лежащее в диапазоне 1-999. Вывести его строку описание вида 
«четное двузначное число», «нечетное трехзначное число» и т. д.
 */
?>
<html>
    <body>
        <form method="GET">
            число: <input type="text" name="num" value="<?php echo $_GET['num']?>"><br/>
            
            <input type="submit" value="отправить">
        </form>
        <?php
    $num = $_GET['num'];
    if ($num % 2 == 0) $par = 'четное ';
    else $par = 'нечетное ';
    if ($num >= 10 && $num < 100) $raz = 'двузначное ';
        elseif ($num >= 100) $raz = 'трехзначное ';
        else $raz = 'однозначное ';
        echo $par, $raz, 'число';
       ?>
    </body>
</html>

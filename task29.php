<?php
/* 
5. Попросить пользователя ввести положительное число кратное 3.
Если ввел не верно, просить повторить ввод, пока не будет введено верное значение.
 */
?>
<html>
    <body>
        <form method="GET">
            ввести положительное число кратное 3<br/>
            <input type="text" name="a" value="<?php echo $_GET['a']?>"><br/>
            <input type="submit" value="отправить">
        </form>
        <?php
    $a = $_GET['a'];
    if ($a % 3 !== 0 || $a <= 0){
        echo 'enter again';
    } 
     ?>
    </body>
</html>

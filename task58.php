<?php
/* 
2. Изменить функцию из предыдущего задания: она должна возвращать
сумму, а не сразу выводить
 */
?>
<html>
    <body>
        <form method="GET">
            ввести числo<br/>
            <input type="text" name="a" value="<?php echo $_GET['a']?>"><br/>
            <input type="submit" value="отправить">
        </form>
        <?php
        $a = $_GET['a'];
        function getPlus10($n)
        {
            return $n + 10;
        }
        echo getPlus10($a);
        ?>
    </body>
</html>
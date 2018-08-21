<?php
/* 
1. Создать функцию в PHP — getPlus10(), которая будет принимать 
число и распечатывать сумму этого числа и 10.
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
            echo $n + 10;
        }
        getPlus10($a);
        ?>
    </body>
</html>
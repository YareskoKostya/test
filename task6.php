<html>
    <body>
        <form method="GET">
            variable a: <input type="text" name="testa">
            variable b: <input type="text" name="testb">
            <input type="submit" value="отправить">
        </form>
        <?php
        $a = $_GET['testa'];
        $b = $_GET['testb'];
        if (($a>2 && $a <11)||($b>=6 && $b<14)){
            
            echo 'верно';
        }
        else {
            echo 'неверно';
        }
        ?>
    </body>
</html>
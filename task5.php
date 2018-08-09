<html>
    <body>
        <form method="GET">
            variable a: <input type="text" name="test">
            
            <input type="submit" value="отправить">
        </form>
        <?php
        $a = $_GET['test'];
        if ($a==0 || $a ==2){
            $a+=7;
            echo 'а = '.$a;
        }
        else {
            $a/=10;
            echo 'а = '.$a;
        }
        ?>
    </body>
</html>
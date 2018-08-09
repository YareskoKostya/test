<html>
    <body>
        <form method="GET">
            variable a: <input type="text" name="test">
            
            <input type="submit" value="отправить">
        </form>
        <?php
        $a = $_GET['test'];
        if ($a=='test') echo 'верно а = '.$a;
        else echo "неверно";
        
        ?>
    </body>
</html>
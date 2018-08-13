<?php

?>
<html>
    <body>
        <form method="GET">
            variable a <input type="text" name="a" value="<?php echo $_GET['a']?>"><br/>
            
            <input type="submit" value="отправить">
        </form>
        <?php
    $a = $_GET['a'];
    //$mess = ($a > 18) ? 'yes' : 'no';
    $mess = ($a < 18) ? 'ok' : (($a < 50) ? 'yes':'no');
    echo $mess, '<br/>';  
    $a1 = 5;
    echo (($a1)?:10);
    echo '<br/>'; 
    $b = '98765';
    echo ($b[1]);
     ?>
    </body>
</html>
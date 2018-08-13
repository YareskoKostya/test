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
    switch ($a){
        case 'black':
            echo 'yes black';
            break;
        case 'blue':
            echo 'yes blue';
            break;
        case 'red':
            echo 'yes red';
            break;
        default:
            echo 'no that color';
    }
     ?>
    </body>
</html>
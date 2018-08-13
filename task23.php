<?php

?>
<html>
    <body>
        <form method="GET">
            variable fruit <input type="text" name="a" value="<?php echo $_GET['a']?>"><br/>
            
            <input type="submit" value="отправить">
        </form>
        <?php
    $a = $_GET['a'];
    switch ($a){
        case 'банан':
            echo 'это банан';
            break;
        case 'яблоко':
            echo 'это яблоко';
            break;
        case 'вишня':
            echo 'это вишня';
            break;
        default:
            echo 'этого фрукта нет в списке';
    }
     ?>
    </body>
</html>
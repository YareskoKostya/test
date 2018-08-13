<?php

?>
<html>
    <body>
        <form method="GET">
           <input type="text" name="a" value="<?php echo $_GET['a']?>"><br/>
            
            <input type="submit" value="отправить">
        </form>
        <?php
    $a = $_GET['a'];
    $a = 2;
    for ($i = 0; $i < 5; $i++){
        $a++;
        echo $a;
    }
    echo '<br/>';
    for ($i = 0; $i < 4; $i++){
        echo 'внешний цикл. <br/>';
        for ($j = 0; $j < 4; $j++){
           echo 'вложенный цикл. <br/>';
        }
    }
     ?>
    </body>
</html>
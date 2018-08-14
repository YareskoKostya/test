<?php
/* 
3. Вывести 10 первых степеней двойки.
 */
?>
<html>
    <body>        
        <?php
    $n = 10;
    $mult = 1;
    for ($i = 1; $i <= $n; $i++){
        echo pow(2, $i), '<br/>';
    } 
     ?>
    </body>
</html>

<?php
/* 
7. С клавиатуры вводятся n чисел. Составьте программу, которая определяет кол-во отрицательных,
кол-во положительных и кол-во нулей среди введенных чисел. Значение n вводится с клавиатуры.
 */
?>
<html>
    <body>
        <form method="GET">
            ввести n чисел<br/>
            <input type="text" name="a" value="<?php echo $_GET['a']?>"><br/>
            <input type="submit" value="отправить">
        </form>
        <?php
    $a = $_GET['a'];
    $b = explode(' ', $a);
    $neg = 0;
    $poz = 0;
    $zer = 0;    
    foreach ($b as $i){
        if ($i < 0) $neg++;
        if ($i > 0) $poz++;
        if ($i == 0) $zer++;
    }       
    echo 'кол-во отрицательных чисел - ', $neg, '<br/>';    
    echo 'кол-во положительных чисел - ', $poz, '<br/>'; 
    echo 'кол-во нулей - ', $zer, '<br/>'; 
     ?>
    </body>
</html>
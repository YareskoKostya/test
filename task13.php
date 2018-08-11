<?php
/* 
 9) В переменной $year хранится год. Определите, является ли он високосным (в таком 
году есть 29 февраля). Год будет високосным в двух случаях: либо он делится на 4, 
но при этом не делится на 100, либо делится на 400.
 */
?>
<html>
    <body>
        <form method="GET">
            год: <input type="text" name="year" value="<?php echo $_GET['year']?>"><br/>
            
            <input type="submit" value="отправить">
        </form>
        <?php
    $year = $_GET['year'];
    if (($year % 4 == 0 && $year % 100 !== 0) || ($year % 400 == 0)) echo "год высокосный";
    else echo "год невысокосный";
       ?>
    </body>
</html>
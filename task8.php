<html>
    <body>
        <form method="GET">
            variable a: <input type="text" name="test">
            
            <input type="submit" value="отправить">
        </form>
        <?php
    $min=$_GET['test'];
    if ($min>=1 && $min<4) echo "зима";
    elseif ($min>=4 && $min<7) echo "весна"; 
    elseif ($min>=7 && $min<10) echo "лето"; 
    elseif ($min>=10 && $min<=12) echo "осень"; 
    else echo "введито число >=1 и <=12";
    ?>
    </body>
</html>
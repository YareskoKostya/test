<html>
    <body>
        <form method="GET">
            variable a: <input type="text" name="test">
            
            <input type="submit" value="отправить">
        </form>
        <?php
    $min=$_GET['test'];
    if ($min>0 && $min<14) echo "первая часть";
    elseif ($min>=15 && $min<29) echo "вторая часть"; 
    elseif ($min>=30 && $min<44) echo "третья часть"; 
    elseif ($min>=45 && $min<59) echo "четвертая часть"; 
    else echo "введито число >0 и <59";
    ?>
    </body>
</html>



<html>
    <body>
        <form method="GET">
            оценка по математике: <input type="text" name="mat">
            оценка по физике: <input type="text" name="phiz">
            оценка по химии: <input type="text" name="chim">
            оценка по литературе: <input type="text" name="lit">
            оценка по англ. языку: <input type="text" name="lan">
            
            <input type="submit" value="отправить">
        </form>
        <?php
    $mat=$_GET['mat'];
    $phiz=$_GET['phiz'];
    $chim=$_GET['chim'];
    $lit=$_GET['lit'];
    $lan=$_GET['lan'];
    $sred=($mat+$phiz);
    if ($min>=1 && $min<4) echo "зима";
    elseif ($min>=4 && $min<7) echo "весна"; 
    elseif ($min>=7 && $min<10) echo "лето"; 
    elseif ($min>=10 && $min<=12) echo "осень"; 
    else echo "введито число >=1 и <=12";
    ?>
    </body>
</html>
<?php
?>
<html>
    <body>
        <form method="GET">
           <input type="text" name="a" value="<?php echo $_GET['a']?>"><br/>
            <input type="submit" value="отправить">
        </form>
        <?php
    $n = $_GET['a'];
    $mult = 1;
    if ($n < 0){
        echo 'enter again';
    } else {
    for ($i = 1; $i <= $n; $i++){
        $mult *= $i;
    }
    echo $mult;
    }
     ?>
    </body>
</html>
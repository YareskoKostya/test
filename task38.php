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
    $arr = [];
    
    for ($i = 0; $i < 10; $i++){
        $arr[] = rand(-5, 10);
    }
    var_dump($arr);
    foreach ($arr as $key => $value) {
        if ($value == $n) {
            echo "[$key] =>".$value;
            break;
        }
    }
     ?>
    </body>
</html>
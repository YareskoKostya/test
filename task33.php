<?php
/* 
9. Нарисовать равнобедренный треугольник из символов ^
Высоту выбирает пользователь. Например: высота = 5 символов на экране
 */
?>
<html>
    <body>
        <form method="GET">
            ввести высоту <br/>
            <input type="text" name="h" value="<?php echo $_GET['h']?>"><br/>
            <input type="submit" value="отправить">
        </form>
        <?php
    $h = $_GET['h'];
    
    for ($n = 0; $n < $h; $n++){
        for ($i = $n + 1; $i < $h; $i++){
            echo '&nbsp', '&nbsp';
        }
        for ($j = 0; $j <= 2 * $n; $j++){
            echo '^';
        }
    echo '<br/>';    
    }
    
     ?>
    </body>
</html>

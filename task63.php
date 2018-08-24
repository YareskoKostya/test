<?php
/* 
 7. Преобразовать строку, введённую пользователем, так, чтобы буквы 
каждого слова в ней были отсортированы по алфавиту
 */
?>
<html>
    <body>
        <form method="GET">
            ввести строку<br/>
            <input type="text" name="a" value="<?php echo $_GET['a']?>"><br/>
            <input type="submit" value="отправить">
        </form>
        <?php
        $a = $_GET['a'];
        $arr = explode(' ', $a);
        
        function getStr($arr)
        {
            foreach ($arr as $v) {
                $b = str_split($v);
                sort($b);
                $arrNew[] = implode('', $b);
            }
            $aNew = implode(' ', $arrNew);
            return $aNew;
        }
        echo getStr($arr);
        ?>
    </body>
</html>
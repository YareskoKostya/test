<html>
    <body>
        <form method="GET">
            Кол-во гривен: <input type="text" name="grn">
            курс: <input type="text" name="kurs">
            <input type="submit" value="отправить">
        </form>
        <?php
        echo "<br/>Кол-во долларов = ".($_GET['grn'] / $_GET['kurs']);
        ?>
    </body>
</html>
<html>
    <body>
        <form method="GET">
            Кол-во гривен: <input type="text" name="grn">
            курс: <input type="text" name="kurs">
            <input type="submit" value="отправить">
        </form>
        <?php
        echo "<br/>Кол-во долларов = ";
        if (isset($_GET['grn']) && isset($_GET['kurs'])) echo ($_GET['grn'] / $_GET['kurs']);
        ?>
    </body>
</html>
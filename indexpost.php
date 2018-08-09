<html>
    <body>
        <form method="POST">
            login: <input type="text" name="login" value="<?php echo $_POST['login']?>">
            email: <input type="text" name="email" value="<?php echo $_POST['email']?>">
            name: <input type="text" name="name" value="<?php echo $_POST['name']?>">
            surname: <input type="text" name="surname" value="<?php echo $_POST['surname']?>">
            <input type="checkbox" name="box">
            <input type="submit" value="отправить">
        </form>
        <?php
        echo "<br/>login = ".$_POST['login'];
        echo "<br/>email = ".$_POST['email'];
        echo "<br/>name = ".$_POST['name'];
        echo "<br/>surname = ".$_POST['surname'];
        echo "<br/>checkbox = ".$_POST['box'];
?>
    </body>
</html>

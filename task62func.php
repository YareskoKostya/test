<?php
$a = $_POST['a'];
function getForm($a)
{
    if ($_POST['c1']) {
        return $a;
    } elseif ($_POST['c2']) {
        return date('G:i:s');
    } elseif ($_POST['c3']) {
        return 'kostya';
    } elseif ($_POST['c4']) {
        return "редактировать комментарий: $a";
    } elseif ($_POST['c5']) {
        return 'удалить комментарий';
    } elseif ($_POST['c6']) {
        return 'отправить комментарий анонимно';
    }
}
echo getForm($a);
?>
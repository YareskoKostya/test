<?php
/**
7) Идёт матч Англия:Бельгия. За каждый гол Англии коэффициент будет повышаться
на 1,5,  а на каждый гол Бельгии на 2,5. Если одна из команд не забила ни одного 
гола, ставить ей коэффициент разницы коэффициентов. Вычислить прибыль 
пользователя в обоих случаях при вводе указаной им суммы и счёта.
**/
?>
<html>
    <body>
        <form method="GET">
            счет: Англия <input type="text" name="angl"> : <input type="text" name="bel"> Бельгия<br/>
            сумма: <input type="text" name="sum"><br/>
            <input type="submit" value="отправить">
        </form>
        <?php
    $angl = $_GET['angl'];
    $bel = $_GET['bel'];
    $sum = $_GET['sum'];
        
    if ($angl > 0  && $bel > 0) echo "прибыль: ".($angl * 1.5 + $bel * 2.5) * $sum;
    elseif ($angl == 0  || $bel == 0) echo "прибыль: ". abs($angl * 1.5 - $bel * 2.5) * $sum; 
    else echo "введите правильно счет и сумму";
    ?>
    </body>
</html>
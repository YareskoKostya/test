<?php
//6) Ввести оценки ученика по 5ти предметам. Посчитать средний балл и перевести его 
//в словарный эквивалент. Например 0-30 – выгнать, 30-60 не зачёт, 60-74 –
//удовлетворительно, 75-89 – хорошо, 90-100 – отлично.
?>
<html>
    <body>
        <form method="GET">
            оценка по математике: <input type="text" name="mat"><br/>
            оценка по физике: <input type="text" name="phiz"><br/>
            оценка по химии: <input type="text" name="chim"><br/>
            оценка по литературе: <input type="text" name="lit"><br/>
            оценка по англ. языку: <input type="text" name="lan"><br/>
            <input type="submit" value="отправить">
        </form>
        <?php
    $mat = $_GET['mat'];
    $phiz = $_GET['phiz'];
    $chim = $_GET['chim'];
    $lit = $_GET['lit'];
    $lan = $_GET['lan'];
    $sred = ($mat + $phiz + $chim + $lit + $lan) / 5;
    if ($sred >= 0 && $sred <= 30) echo "отчислить";
    elseif ($sred >= 31 && $sred <= 60) echo "незачет"; 
    elseif ($sred >= 61 && $sred <= 74) echo "удовлетворительно"; 
    elseif ($sred >= 75 && $sred <= 89) echo "хорошо";
    elseif ($sred >= 90 && $sred <= 100) echo "отлично";
    else echo "введито оценку >=0 и <=100";
    ?>
    </body>
</html>
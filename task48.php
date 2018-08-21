<?php
function getName($name)
{
    echo "вы находитесь на сайте $name<br/>";
}

echo 'привет всем <br/>';
getName('test.loc');
getName('project.loc');
echo 'рады вас видеть<br/>';

function recursion($a)
{
    if ($a < 10) {
        echo "$a<br/>";
        recursion($a + 1);
    }
}
recursion(1);
<?php

date_default_timezone_set('america/sao_paulo');

$hora = date('H');

if ($hora >= 7 && $hora <= 11) {

    echo "Bom dia!";

} elseif ($hora >= 12 && $hora <= 18) {

    echo "Boa tarde!";

} elseif ($hora >= 19 && $hora <= 23) {
   
    echo "Boa noite!";

} else {

    echo "Vai dormir!!!";

}

echo "<br>";

var_dump($hora);

?>
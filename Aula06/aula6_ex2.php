<?php

$nível = 4;

switch ($nível) {
    case 1:
        echo "Fácil";
        echo "<br>";
        break;
    case 2:
        echo "Normal";
        echo "<br>";
        break;
    case 3:
        echo "Difícil";
        echo "<br>";
        break;
    case 4:
        echo "Impossível";
        echo "<br>";
        break;
    case 5:
        echo "Pesadelo";
        echo "<br>";
        break;
    default:
        echo "Selecione um nível";
}

?>
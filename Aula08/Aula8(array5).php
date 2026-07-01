<?php

$paises = array(
    "Brasil",
    "Argentina",
    "Paraguai",
    "Uruguai",
    "Chile",
    "Peru",
    "Bolívia",
    "Equador",
    "Venezuela",
    "Colômbia",
);

sort($paises);

foreach( $paises as $pais) {
    echo $pais.'<br/>';
}

echo '<br><br><br><br>';

rsort($paises);

foreach( $paises as $pais) {
    echo $pais.'<br/>';
}

?>
<?php

$paises = array(
    "c" => "Brasil",
    "b" => "Argentina",
    "a" => "Paraguai",
);

ksort($paises);

foreach( $paises as $chave => $valor) {
    echo $chave.' : '.$valor.'<br/>';
}


echo '<br><br><br><br>';

asort($paises);

foreach( $paises as $chave => $valor) {
    echo $chave.' : '.$valor.'<br/>';
}


echo '<br><br><br><br>';

arsort($paises);

foreach( $paises as $chave => $valor) {
    echo $chave.' : '.$valor.'<br/>';
}


?>
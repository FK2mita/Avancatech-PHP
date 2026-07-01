<?php

    $campeonatos = array("Campeonato Brasileiro","Libertadores da América");
    print_r($campeonatos); echo '<br/>';
    $campeonatos[2] = 'Copa do Brasil';
    print_r($campeonatos); echo '<br/>';

    unset($campeonatos[0]);

    print_r($campeonatos);

?>
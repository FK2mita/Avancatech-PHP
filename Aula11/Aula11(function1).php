<?php

    function saudar($nome) {
        echo "Olá, ".$nome. "! Seja bem-vindo ao PHP.\n";
    }

    saudar("João");
    echo "<br><br>";

    saudar("Maria");
    echo "<br><br>";


    echo "<br><br>";


    $salario = 3500.00;
    
    function valor($real) {
        $novo_valor = number_format($real,2,".","");
        $novo_valor = "R$ ". $novo_valor;

        return $novo_valor;
    }

    echo valor($salario);
    echo "<br><br>";

?>
<?php

$arsenal = [
    "Armadura Pesada" => [144],
    "Traje Batedor" => [50],
    "Colete Tático" => [100],
    "Traje de Engenheiro" => [75],
    "Manto de Mago" => [25],
    "Traje de Ladino" => [35],
    "Armadura Colossal" => [225],
    "Uniforme de Estudante" => [-15],
    "Top de Corredor" => [12],
    "Jaleco de Médico" => [20]
];

echo "<strong>Vestimentas disponíveis: </strong>(Ordem crescente de atributo)<br/>";

asort($arsenal);

echo "<pre>";
print_r($arsenal);
echo "</pre>";

?>
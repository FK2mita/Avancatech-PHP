<?php

$frutas = ["maçã", "banana", "uva"];

echo "primeira fruta => $frutas[0]";
echo "<br>";
echo "$frutas[2]";
echo "<br>";
$frutas[] = "abacaxi";

echo "$frutas[3]";
echo "<br>";
var_dump($frutas);

?>
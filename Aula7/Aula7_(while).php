<?php

$total = 10;
$x = 1;

while($x <= $total) {
    echo $x."<br/>";
    $x +=3;
}

echo"Agora fora do laço: ". $x."<br/><br/><br/><br/><br/>";


$total = 10;
$y = 11;

do {
    echo $y."<br/>";
    $y +=3;
} while($y <= $total);

echo"Agora fora do laço: ". $y."<br/><br/><br/><br/><br/>";

?>
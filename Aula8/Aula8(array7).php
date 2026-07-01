<?php

$letras1 = array("A","E","I","O","U");
$letras2 = array("I","M","P","A","C","T","A");

print_r(array_diff($letras1, $letras2));
// $letras1 serve de parâmetro na comparação;

print_r(array_intersect($letras1, $letras2));
// $letras1 serve de parâmetro na comparação;

?>
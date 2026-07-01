<?php

$tabuada =2;

for ($a = 1; $a <= 10; $a++) {
    echo $tabuada." x ".$a." = ".($tabuada * $a)."<br/>";
}

echo"<br/><br/><br/>";

for ($a = 1; $a <= 10; $a++) {
    for ($b = 1; $b <= 10; $b++) {
        echo $a."x".$b." = ".($b * $a)."<br/>";
        }
    echo "<br/><br/>";
}

?>
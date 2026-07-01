<?php

$f = 28;
$a = 50;
$d = 210;
$r = 35;


function total_damage($for, $atk, $def, $res){
    $damage = ((1+($for/10)) * $atk) - (($def/1.25) + (1+($res/25)));
    if ($damage < 0) {
        return 0;
    }
    return $damage;
}

$dano1 = total_damage($f, $a, $d, $r);
echo "Dano do Golpe 1: ".$dano1."<br/><br/>";

$dano2 = total_damage(20, 80, 180, 40);
echo "Dano do Golpe 2: ".$dano2."<br/><br/>";

$dano3 = total_damage(25, 65, 105, 38);
echo "Dano do Golpe 3: ".$dano3."<br/><br/>";

?>
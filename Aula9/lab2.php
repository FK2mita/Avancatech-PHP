<?php

$eletro = array(
    'Desktop PRO' => 2580.00,
    'Notebook Tech' => 5245.00,
    'Smartphone' => 2149.00,
    'Smartwatch' => 2300.00,
    'Earpods' => 889.90,
    'Tablet' => 2150.00,
    'Headset Tech' => 685.00,
    'Teclado Tech' => 225.00,
    'Mouse Tech' => 329,90,
    'HD externo 2TB' => 325.00,
    'HD externo 4TB' => 850.00,
    'SSD NVME externo 2TB' => 980.00,
    'SSD NVME externo 4TB' => 1670.00
);

?>
<pre>
    <?php
        print_r($eletro);

    foreach ($eletro as &$Eletros) {
    $Eletros = $Eletros * 1.10;
}

    print_r($eletro);   

    ?>
</pre>


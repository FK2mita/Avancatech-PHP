<?php

    $frutas = array("Laranja","Limão","Uva");

    $outras_frutas = array("Abacate","Assaí","Banana","Amora", "Kiwi");

    print_r($frutas);

    echo '<br/>';
    echo '<br/>';

    print_r(array_merge($frutas, $outras_frutas));

    $unique_array = array_merge($frutas, $outras_frutas);

    echo '<br><br><br><br>';


    print_r(count($frutas));
    echo '<br/>';

    print_r(count($unique_array));
    echo '<br><br>';
    echo "A lista possui ".count($unique_array)." elementos";
    echo '<br><br>';

    echo $unique_array[count($unique_array)-4];

    echo '<br><br><br><br>';

    $paises = array("Brasil", "Argentina", "Paraguai");
    $capitais = array("Brasilia", "Buenos Aires", "Assunção");

    print_r(array_combine($paises, $capitais));


?>
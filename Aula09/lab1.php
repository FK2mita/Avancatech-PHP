<?php

    $postos = array(
        "1" => "Posto Alfa",
        "2" => "Posto Bravo",
        "3" => "Posto Charlie",
        "4" => "Posto Delta",
        "5" => "Posto Eco",
        "6" => "Posto Fox",
        "7" => "Posto Golf",
        "8" => "Posto Hotel"
    );

    $pontos = array(
        "Alfa",
        "Bravo",
        "Charlie",
        "Delta",
        "Eco",
        "Fox",
        "Golf",
        "Hotel"
    );

    echo "<strong>Selecione a localização: <strong/><br/>";

?>

<select name = "postos">
    <option value = 'Posto Alfa'>Posto Alfa</option>
    <option value = 'Posto Bravo'>Posto Bravo</option>
    <option value = 'Posto Charlie'>Posto Charlie</option>
    <option value = 'Posto Delta'>Posto Delta</option>
    <option value = 'Posto Eco'>Posto Eco</option>
    <option value = 'Posto Fox'>Posto Fox</option>
    <option value = 'Posto Golf'>Posto Golf</option>
    <option value = 'Posto Hotel'>Posto Hotel</option>
</select>

<a><br/></a>
<a><br/></a>
<a><br/></a>

<p>Indique o ponto:</p>
<select name = "pontos">

<?php
    foreach ($pontos as $ponto => $lugar) {
        echo "<option value = '$ponto'>$lugar</option>";
    }
?>
</select>

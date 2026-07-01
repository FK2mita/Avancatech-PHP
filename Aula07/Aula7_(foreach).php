<?php

$carro = array(
    "Camaro",
    "Ferrari Califórnia",
    "Range Rover Sport",
    "Mercedes CLS 63 AMG",
    "Volkswagen Gol",
    "Porshe 611"
);

foreach ($carro as $chave => $modelo) {
    echo "<strong>posição: $chave</strong> $modelo <br/>";
}

echo "<br/><br/><br/>";

?>

<select name = "carro">

<?php

foreach ($carro as $chave => $modelo) {
    echo "<option value = '$chave'>$modelo</option>";
}
?>
</select>
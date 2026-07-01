<?php

    $post = array(
        'id' => 1,
        'título' => 'Tecnologias Open-Source',
        'post' => 'Cada vez mais o mercado vem adotando...',
        'categoria' => 'tecnologia'
    );

    $chaves = array_keys($post);

    print_r($chaves);
    echo'<br/><br/><br/>';

    $valores = array_values($post);

    print_r($valores);
    echo'<br/><br/><br/>';


?>
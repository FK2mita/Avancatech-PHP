<?php


$conexao; 
function conecta($banco, $servidor = 'localhost', $usuario = 'root', $senha = '') {
    
    
    global $conexao; 
    
    
    $conexao = mysqli_connect($servidor, $usuario, $senha, $banco) or die('Erro ao conectar com o banco de dados.');
    
    return $conexao;
}


function desconecta() {
    global $conexao;
    
    
    if ($conexao) {
        mysqli_close($conexao);
    }
}
?>
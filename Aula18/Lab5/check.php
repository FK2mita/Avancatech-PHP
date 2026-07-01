<?php

// Como o código do laboratório usa $_SESSION
// o PHP obriga a iniciar a sessão na primeiríssima linha!
session_start();

// chamando o código
require_once 'configuration.php';

$conn = conecta('Lab');

// Código fornecido na apostila para validar o usuário
$sql = "select idlogin, nome, ultimo_acesso from login
        where email='aluno@escola.com' and senha = 'senha123'";

$exec = mysqli_query($conn, $sql) or die("Erro do MySQL: " . mysqli_error($conn));
$linhas = mysqli_num_rows($exec);

// Verifica se a consulta resultou algum registro
if($linhas == 0){
    
    $_SESSION["erro"] = "E-mail e/ou senha incorretos!";
    
    desconecta($conn);
    
    header("location:default.php");
    exit();
}

// se passar pelo if usuário autorizado.
$_SESSION["autorizado"] = true;

// Desconectar do banco antes de o PHP mudar de página
desconecta($conn);

header("location:default2.php");

?>
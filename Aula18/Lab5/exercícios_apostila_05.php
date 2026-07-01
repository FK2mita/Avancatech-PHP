
<?php

/*
CREATE TABLE `Lab`.`login` (
  `idlogin` INT NOT NULL AUTO_INCREMENT ,
  `email` VARCHAR(45) NOT NULL ,
  `senha` VARCHAR(45) NOT NULL ,
  `nome` VARCHAR(45) NOT NULL ,
  `ultimo_acesso` TIMESTAMP NOT NULL ,
  PRIMARY KEY (`idlogin`)
);

Usamos a função CURRENT_TIMESTAMP do MySQL para preencher o 
último acesso automaticamente com a data/hora atual.

INSERT INTO `login` (`email`, `senha`, `nome`, `ultimo_acesso`) 
VALUES ('aluno@escola.com', 'senha123', 'João da Silva', CURRENT_TIMESTAMP);
*/

?>


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


<?php



// Como o código do laboratório usa $_SESSION
// o PHP obriga a iniciar a sessão na primeiríssima linha!
session_start();

// chamando o código
require_once 'configuration.php';

$conn = conecta('Lab');

// Código fornecido na apostila para validar o usuário
$sql = "select idlogin, nome, ultimo_acesso from login 
        where email='mestre' and senha = '123456'";

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
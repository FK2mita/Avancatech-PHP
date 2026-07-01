<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "usuarios";


$conexao = new mysqli($servidor, $usuario, $senha, $banco);

if ($conexao->connect_error){
    die("Falha ao conectar com o banco: ".$conexao->connect_error);
}


$sql = "SELECT nome, idade FROM cliente WHERE idade >=18";

$resultado = $conexao->query($sql);

if ($resultado->num_rows > 0){
    while($linha = $resultado->fetch_assoc()){
        echo "Nome: " . $linha["nome"] . " | Idade: " . $linha["idade"]."<br>";
    }
} else {
    echo "Nenhum cliente com 18 anos ou mais foi encontrado no banco.";
}


//$conexao->close(); 
//[pode ser deletado para testar funcionalidade do código]


echo "</br>";

$sql = "SELECT * FROM cliente";

$resultado = $conexao->query($sql);

if ($resultado->num_rows > 0){

    echo"<h3>Lista Completa de Clientes:</h3>";

    while($linha = $resultado->fetch_assoc()){
        echo "<b>Nome:</b> " . $linha["nome"] . " | ";
        echo "<b>Idade:</b> " . $linha["idade"] . " | ";
        echo "<b>Gênero:</b> " . $linha["genero"] . " | ";
        echo "<b>Peso:</b> " . $linha["peso"] . " | ";
        echo "<b>Altura:</b> " . $linha["altura"] . " | ";
        echo "<b>Nacionalidade:</b> " . $linha["nacionalidade"] . "<br><hr>";
    }
} else {
    echo "O banco de dados de clientes está vazia.";
}



$conexao->close();

?>
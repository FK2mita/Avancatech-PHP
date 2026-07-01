<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "usuarios";


$conexao = new mysqli($servidor, $usuario, $senha, $banco);

if ($conexao->connect_error){
    die("Falha ao conectar com o banco: ".$conexao->connect_error);
}

echo "</br>";

$sql = "SELECT * FROM cliente";

$resultado = $conexao->query($sql);

if ($resultado->num_rows > 0){

    $linha = $resultado->fetch_assoc();
        echo"<h3>Ficha do cliente encontrado:</h3>";
        echo "<b>Nome:</b> " . $linha["nome"] . "<br>";
        echo "<b>Idade:</b> " . $linha["idade"] . "<br>";
        echo "<b>Gênero:</b> " . $linha["genero"] . "<br>";
        echo "<b>Peso:</b> " . $linha["peso"] . "<br>";
        echo "<b>Altura:</b> " . $linha["altura"] . "<br>";
        echo "<b>Nacionalidade:</b> " . $linha["nacionalidade"] . "<br><hr>";
} else {
    echo "O cliente 'Carlos Silva' não foi encontrado.</br></br>";
}

$novoNome = "Carlos Silva";
$novaIdade = 28;
$novoGenero = "M";
$novoPeso = 75.5;
$novaAltura = 1.72;
$novaNacionalidade = "Brasileiro";

$sql = "INSERT INTO cliente (nome, idade, genero, peso, altura, nacionalidade)
        VALUES ('$novoNome', $novaIdade, '$novoGenero', $novoPeso, $novaAltura, '$novaNacionalidade')";

if($conexao->query($sql) === TRUE){
    echo "Sucesso! O cliente <b>" . $novoNome . "<b/> foi encontrado no banco de dados.</br></br>";
} else {
    echo "Erro ao pesquisar o cliente: " . $conexao->error;
}


$conexao = new mysqli($servidor, $usuario, $senha, $banco);
if ($conexao->connect_error){
    die("Falha ao conectar com o banco: ".$conexao->connect_error);
}

$sql = "DELETE FROM cliente WHERE nome = 'Carlos Silva'";

if($conexao->query($sql) === TRUE){
    if ($conexao->affected_rows > 0){
    echo "Sucesso! O cliente Carlos Silva foi deletado do banco de dados.</br></br>";
    } else {
        "O comando funcionaou, mas nenhum cliente chamado 'Carlos Silva' foi encontrado no banco de dados</br></br>";
    }
}
else {
    echo "Erro ao pesquisar o cliente: " . $conexao->error;
}

$conexao->close();

?>
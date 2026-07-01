<?php

function conecta ($banco, $dns='localhost', $user='root', $senha=''){
    $conn = mysqli_connect($dns, $user, $senha, $banco) or
        die ('Desculpe-nos, estamos passando por um problema no momento.');
    if ($conn) {
        return $conn;
    }
}

function desconecta ($link) {
    mysqli_close($link);
}

$conn = conecta('Lab');

$sql = "INSERT exercicio
(email, senha, nome, ultimo_acesso) VALUES
('lab@mail.com', '#senha#', 'Laboratório', 0)";

$result = mysqli_query($conn, $sql);

echo $result?'Acesso de usuário obtido com sucesso':'Erro ao pesquisar acesso!';

desconecta($conn);

?>
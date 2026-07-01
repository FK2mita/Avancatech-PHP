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

$conn = conecta('php_modulo_1');

$sql = "INSERT clientes
(nome, telefone, endereco, email) VALUES
('Olivia Dunham', '11 2222-3333', 'Rua Science Fiction, 12', 'oliv@mail.com')";

$result = mysqli_query($conn, $sql);

echo $result?'Usuário cadastrado com sucesso':'Erro ao incluir';

desconecta($conn);

?>
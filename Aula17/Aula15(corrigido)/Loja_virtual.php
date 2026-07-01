<?php
//conectar
$conexao = new mysqli("localhost", "root", "", "loja_inventario");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id_para_deletar'])) {
    $idApagar = $_POST['id_para_deletar'];
    $sqlDelete = "DELETE FROM produtos WHERE id = $idApagar";
    $conexao->query($sqlDelete);
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['item_escolhido'])) {
    $escolha = $_POST['item_escolhido'];
    
    //vários itens podem ser selecionados e o preço
    if ($escolha == "pao") {
        $nome = "Pão Nutritivo"; $categoria = "Comida"; $preco = 5.00;
    } elseif ($escolha == "pocao") {
        $nome = "Poção de Vida"; $categoria = "Bebida"; $preco = 25.50;
    } elseif ($escolha == "picareta") {
        $nome = "Picareta de Ferro"; $categoria = "Ferramenta"; $preco = 150.00;
    }

    //nossas tabelas vão ter categorias
    if (isset($nome)) {
        $sqlInsert = "INSERT INTO produtos (nome, categoria, preco) VALUES ('$nome', '$categoria', $preco)";
        $conexao->query($sqlInsert);
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Meu Inventário</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #2c3e50; color: white; text-align: center; padding: 20px; }
        .painel { background-color: #34495e; padding: 20px; border-radius: 10px; display: inline-block; margin-bottom: 30px; }
        select, button { padding: 10px; font-size: 16px; border-radius: 5px; border: none; margin: 5px; }
        .btn-add { background-color: #27ae60; color: white; cursor: pointer; font-weight: bold; }
        .btn-add:hover { background-color: #2ecc71; }
        .btn-del { background-color: #c0392b; color: white; cursor: pointer; padding: 5px 10px; font-size: 14px; }
        .btn-del:hover { background-color: #e74c3c; }
        table { margin: 0 auto; border-collapse: collapse; width: 70%; background-color: #ecf0f1; color: #333; border-radius: 8px; overflow: hidden; }
        th { background-color: #2980b9; color: white; padding: 15px; }
        td { padding: 12px; border-bottom: 1px solid #bdc3c7; vertical-align: middle; }
        tr:hover { background-color: #d5d8dc; }
    </style>
</head>
<body>

    <h1>Loja de Itens</h1>
    
    <div class="painel">
        <form method="POST">
            <label>Escolha um item para adicionar:</label><br>
            <select name="item_escolhido">
                <option value="pao">🥖 Pão (Comida)</option>
                <option value="pocao">🧪 Poção (Bebida)</option>
                <option value="picareta">⛏️ Picareta (Ferramenta)</option>
            </select>
            <button type="submit" class="btn-add">Adicionar ao Banco</button>
        </form>
    </div>

    <h2>Itens Cadastrados no Banco:</h2>
    
    <table>
        <tr>
            <th>ID</th>
            <th>Nome do Item</th>
            <th>Categoria</th>
            <th>Preço (Moedas)</th>
            <th>Ação</th>
        </tr>
        
        <?php
        $sqlBusca = "SELECT * FROM produtos";
        $resultado = $conexao->query($sqlBusca);

        if ($resultado->num_rows > 0) {
            while($linha = $resultado->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $linha["id"] . "</td>";
                echo "<td>" . $linha["nome"] . "</td>";
                echo "<td>" . $linha["categoria"] . "</td>";
                echo "<td>" . $linha["preco"] . "</td>";
                echo "<td>";
                echo "<form method='POST' style='margin: 0;'>";
                echo "<input type='hidden' name='id_para_deletar' value='" . $linha["id"] . "'>";
                echo "<button type='submit' class='btn-del'>🗑️ Excluir</button>";
                echo "</form>";
                echo "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='5'>O inventário está vazio.</td></tr>";
        }

        $conexao->close();
        ?>
    </table>

</body>
</html>
<?php
// 1. Conexão com o banco de dados
$conexao = new mysqli("localhost", "root", "", "loja_inventario");

// ==========================================
// 2. A SOLUÇÃO BASEADA NA SUA IMAGEM
// ==========================================

$sqlTabela = "CREATE TABLE IF NOT EXISTS produtos (
    id INT(11) NOT NULL AUTO_INCREMENT,
    nome VARCHAR(40) NOT NULL,
    categoria VARCHAR(30) NOT NULL,
    preco FLOAT NOT NULL,
    PRIMARY KEY (id)
)";
$conexao->query($sqlTabela);

// 3. Lógica para Deletar
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id_para_deletar'])) {
    $idApagar = $_POST['id_para_deletar'];
    $sqlDelete = "DELETE FROM produtos WHERE id = $idApagar";
    $conexao->query($sqlDelete);
}

// 4. Lógica para Inserir
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['item_escolhido'])) {
    $escolha = $_POST['item_escolhido'];
    
     if ($escolha == "pao") {
        $nome = "Pão Nutritivo"; $categoria = "Comida"; $preco = 1.20;
    } elseif ($escolha == "pocao_de_cura") {
        $nome = "Poção de Vida"; $categoria = "Bebida"; $preco = 8.50;
    } elseif ($escolha == "pocao_de_mana") {
        $nome = "Poção de Mana"; $categoria = "Bebida"; $preco = 10.50;
    } elseif ($escolha == "pocao_de_stamina") {
        $nome = "Poção de Estamina"; $categoria = "Bebida"; $preco = 9.50;
    } elseif ($escolha == "picareta") {
        $nome = "Picareta de Ferro"; $categoria = "Ferramenta"; $preco = 70.20;
    } elseif ($escolha == "machadinha_de_escalada") {
        $nome = "Machadinha de escalada"; $categoria = "Ferramenta"; $preco = 82.50;
    } elseif ($escolha == "kit_de_reparo") {
        $nome = "Kit de reparo"; $categoria = "Ferramenta"; $preco = 5.00;
    } elseif ($escolha == "pedra_de_amolar") {
        $nome = "Pedra de amolar"; $categoria = "Ferramenta"; $preco = 6.00;
    } elseif ($escolha == "armadura_de_couro") {
        $nome = "Armadura de couro"; $categoria = "Vestimenta"; $preco = 78.50;
    } elseif ($escolha == "armadura_de_bronze") {
        $nome = "Armadura de bronze"; $categoria = "Vestimenta"; $preco = 95.80;
    } elseif ($escolha == "robe_de_mago") {
        $nome = "Robe de mago"; $categoria = "Vestimenta"; $preco = 45.20;
    } elseif ($escolha == "flechas_de_pedra") {
        $nome = "Flechas de Pedra"; $categoria = "Munição"; $preco = 7.50;
    } elseif ($escolha == "flechas_de_ferro") {
        $nome = "Flechas de Ferro"; $categoria = "Munição"; $preco = 10.80;
    } elseif ($escolha == "flechas_magicas") {
        $nome = "Flechas Mágicas"; $categoria = "Munição"; $preco = 15.50;
    } elseif ($escolha == "arco_composto") {
        $nome = "Arco Composto"; $categoria = "Longo alcance"; $preco = 72.80;    
    } elseif ($escolha == "espada_simples") {
        $nome = "Espada simples"; $categoria = "Arma de mão"; $preco = 55.00;
    } elseif ($escolha == "espada_longa") {
        $nome = "Espada Longa"; $categoria = "Arma de mão"; $preco = 95.00;
    } elseif ($escolha == "laminas_de_combate") {
        $nome = "Laminas de Combate"; $categoria = "Arma de mão"; $preco = 60.30;
    }

    if (isset($nome)) {
        // O INSERT não precisa enviar o ID, o AUTO_INCREMENT faz isso sozinho!
        $sqlInsert = "INSERT INTO produtos (nome, categoria, preco) VALUES ('$nome', '$categoria', $preco)";
        $conexao->query($sqlInsert);
    }
}

// "drop table produto;" no SQL Workbench para apagar e recriar a tabela "produtos" na base de dados "loja_inventario";
// Para reiniciar a contagem de "ID".

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
                <option value="pocao_de_cura">🧪 Poção de cura (Bebida)</option>
                <option value="pocao_de_mana">🧪 Poção de mana (Bebida)</option>
                <option value="pocao_de_estamina">🧪 Poção de estamina (Bebida)</option>
                <option value="picareta">⛏️ Picareta (Ferramenta)</option>
                <option value="machadinha">⛏️ Machadinha de escalada (Ferramenta)</option>
                <option value="pedra_de_amolar">✦ Pedra de amolar (Ferramenta)</option>
                <option value="kit_de_reparo">🔧 Kit de reparo (Ferramenta)</option>
                <option value="armadura_de_couro">🥾 Armadura de couro (Vestimenta)</option>
                <option value="armadura_de_bronze">🛡️ Armadura de bronze (Vestimenta)</option>
                <option value="robe_de_mago">🧙‍♂️ Robe de mago (Vestimenta)</option>
                <option value="flechas_de_pedra">⁀➴ Flechas de pedra (20x) (Munição)</option>
                <option value="flechas_de_ferro">⁀➴ Flechas de ferro (15x) (Munição)</option>
                <option value="flechas_magicas">°˖➴ Flechas Mágicas (10x) (Munição)</option>
                <option value="arco_composto">🏹 Arco Composto (Longo alcance)</option>
                <option value="espada_simples">🗡 Espada Simples (Arma de 1 mão)</option>
                <option value="espada_longa">🗡️ Espada Longa (Arma de 2 mãos)</option>
                <option value="laminas_de_combate">⚔️ Laminas de Combate (Arma de 2 mãos)</option>
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

        if ($resultado && $resultado->num_rows > 0) {
            while($linha = $resultado->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $linha["id"] . "</td>";
                echo "<td>" . $linha["nome"] . "</td>";
                echo "<td>" . $linha["categoria"] . "</td>";
                echo "<td>$" . number_format($linha["preco"], 2, ',', '.') . "</td>"; // Bônus: Formatação de preço!
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
<?php

$conexao = new mysqli("localhost", "root", "123456", "pedidos");

$sqlTabela = "CREATE TABLE IF NOT EXISTS produtos_espec (
    id INT(15) NOT NULL AUTO_INCREMENT,
    nome VARCHAR(40) NOT NULL,
    categoria VARCHAR(30) NOT NULL,
    preco FLOAT NOT NULL,
    PRIMARY KEY (id)
)";
$conexao->query($sqlTabela);


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id_para_deletar'])) {
    $idApagar = $_POST['id_para_deletar'];
    $sqlDelete = "DELETE FROM produtos WHERE id = $idApagar";
    $conexao->query($sqlDelete);
}


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['peca_escolhida'])) {
    $escolha = $_POST['peca_escolhida'];
    
    if ($escolha == "pao") {
        $nome = "Pão Nutritivo"; $categoria = "Comida"; $preco = 1.20;
    } elseif ($escolha == "pocao_de_cura") {
        $nome = "Poção de Vida"; $categoria = "Bebida"; $preco = 8.50;
    }

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
    <title>Personalização</title>
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

        .BTN-COMPRAR {
                display: block;
                text-decoration: none;
                background-color: #15d815ff;
                color: white;
                justify-content: center;
                padding: 10px;
                border-radius: 8px;
                width: 100px;
                height: 35px;
                font-weight: bold;
                transition: 0.3s;
            }

            .BTN-COMPRAR:hover {
                background-color: #15d815ff;
            }

    </style>
</head>
<body>

    <h1>Personalize sua máquina:</h1>
    
    <div class="painel">
        <form method="POST">
            <label><strong>Processador:</strong></label><br>
            <select name="processador">
                <option value="i5"> Intel Core i5 </option> 
                <option value="i7"> Intel Core i7 </option>      
                <option value="ultra9"> Intel Core Ultra 9 </option>
            </select>
            <button type="submit" class="btn-add">Adicionar</button>
            <br>

        <label><strong>Memória RAM:</strong></label><br>
            <select name="ram">
                <option value="8GB"> 8GB DDR5</option>
                <option value="16GB"> 16GB DDR5</option>
                <option value="32GB"> 32GB DDR5</option>
                <option value="32GB"> 64GB DDR5</option>
                <option value="128GB"> 128GB DDR5</option>
            </select>
            <button type="submit" class="btn-add">Adicionar</button>
            <br>

        <label><strong>Placa de vídeo:</strong></label><br>
            <select name="RTX">
                <option value="RTX4050"> RTX 4050</option>
                <option value="RTX4060"> RTX 4060</option>
                <option value="RTX4070Ti"> RTX 4070 Ti</option>
                <option value="RTX4080"> RTX 4080</option>
                <option value="RTX4090"> RTX 4090</option>
                <option value="RTX5050"> RTX 5050</option>
                <option value="RTX5060"> RTX 5060</option>
                <option value="RTX5070Ti"> RTX 5070 Ti</option>
                <option value="RTX5080"> RTX 5080</option>
                <option value="RTX5090"> RTX 5090</option>
            </select>
            <button type="submit" class="btn-add">Adicionar</button>
            <br>

        <label><strong>Armazenamento:</strong></label><br>
            <select name="SSD">
                <option value="512GB"> SSD 512GB </option>
                <option value="1TB"> SSD 1TB </option>
                <option value="2TB"> SSD 2TB </option>
                <option value="4TB"> SSD 4TB </option>
            </select>
            <button type="submit" class="btn-add">Adicionar</button>
            <br>

        <label><strong>Slot cartão SD:</strong></label><br>
            <select name="SD">
                <option value="sim"> Sim </option>
                <option value="nao"> Não </option>
            </select>
            <button type="submit" class="btn-add">Adicionar</button>
            <br>

        <label><strong>Quantidade de ventuinhas:</strong></label><br>
            <select name="Cooler">
                <option value="2"> 2 </option>
                <option value="3"> 3 </option>
                <option value="4"> 4 </option>
            </select>
            <button type="submit" class="btn-add">Adicionar</button>
            <br>

        <label><strong>Tamanho de tela:</strong></label><br>
            <select name="Tela">
                <option value="15"> 15" </option>
                <option value="16"> 16" </option>
                <option value="17"> 17" </option>
                <option value="18"> 18" </option>
            </select>
            <button type="submit" class="btn-add">Adicionar</button>
            <br>

        <label><strong>Tela touch removível:</strong></label><br>
            <select name="Touch">
                <option value="sim"> Sim </option>
                <option value="nao"> Não </option>
            </select>
            <button type="submit" class="btn-add">Adicionar</button>
            <br>

        <label><strong>Teclado iluminado:</strong></label><br>
            <select name="Teclado">
                <option value="sim"> Sim </option>
                <option value="nao"> Não </option>
            </select>
            <button type="submit" class="btn-add">Adicionar</button>
            <br>

        <label><strong>USB Type-A 3.2 Gen 1 (5 Gbit/s):</strong></label><br>
            <select name="usb31">
                <option value="2"> 2 </option>
                <option value="3"> 3 </option>
            </select>
            <button type="submit" class="btn-add">Adicionar</button>
            <br>

            <label><strong>Portas Thunderbolt 4:</strong></label><br>
            <select name="thunderbolt">
                <option value="1"> 1 </option>
                <option value="2"> 2 </option>
            </select>
            <button type="submit" class="btn-add">Adicionar</button>
            <br>

        <label><strong>Porta HDMI 2.1:</strong></label><br>
            <select name="hdmi">
                <option value="1"> 1 </option>
                <option value="2"> 2 </option>
            </select>
            <button type="submit" class="btn-add">Adicionar</button>
            <br>

        <label><strong>Conector Ethernet:</strong></label><br>
            <select name="hdmi">
                <option value="1"> 1 </option>
                <option value="2"> 2 </option>
            </select>
            <button type="submit" class="btn-add">Adicionar</button>
            <br>

        <label><strong>Porta P2 (fone):</strong></label><br>
            <select name="P2">
                <option value="sim"> Sim </option>
                <option value="nao"> Não </option>
            </select>
            <button type="submit" class="btn-add">Adicionar</button>
            <br>

        <label><strong>Câmera HDR FHD com infravermelho:</strong></label><br>
            <select name="camera">
                <option value="sim"> Sim </option>
                <option value="nao"> Não </option>
            </select>
            <button type="submit" class="btn-add">Adicionar</button>
            <br>

        <label><strong>Sistema Operacional:</strong></label><br>
            <select name="OS">
                <option value="w11"> Windows 11 25H1</option>
                <option value="w11"> Windows 11 26H1</option>
                <option value="ubuntu"> Ubuntu </option>
            </select>
            <button type="submit" class="btn-add">Adicionar</button>
            <br>

        <label><strong>Softwares:</strong></label><br>
            <select name="softwares">
                <option value="sem_software"> Sem software adicional</option>
                <option value="office_basic"> Office Home & Student </option>
                <option value="office_basic"> Office Home & Business </option>
                <option value="office_365"> Office 365 </option>
            </select>
            <button type="submit" class="btn-add">Adicionar</button>
            <br>

        <label><strong>Pacote de periféricos:</strong></label><br>
            <select name="periféricos">
                <option value="nao"> Não </option>
                <option value="cabeados"> Mouse + Headset com cabo</option>
                <option value="s_cabeados"> Mouse + Headset bluetooth </option>
            </select>
            <button type="submit" class="btn-add">Adicionar</button>
            <br>

        <label><strong>Base ventilada:</strong></label><br>
            <select name="ventilador">
                <option value="sim"> Sim </option>
                <option value="nao"> Não </option>
            </select>
            <button type="submit" class="btn-add">Adicionar</button>
            <br>
        
        </form>
    </div>

    <h2>Pedidos Cadastrados no Banco:</h2>
    
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
    <a href="pag_compra.php" class="BTN-COMPRAR">Carrinho de compras</a>
</body>
</html>
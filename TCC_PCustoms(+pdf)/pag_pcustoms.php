<?php
session_start();

$conexao = new mysqli("localhost", "root", "123456", "pedidos");

/* =========================
   CRIAÇÃO DAS TABELAS
========================= */

$conexao->query("
CREATE TABLE IF NOT EXISTS produtos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100),
    categoria VARCHAR(50),
    marca VARCHAR(50),
    fabricante VARCHAR(50),
    preco DECIMAL(10,2),
    estoque INT DEFAULT 0
)");

$conexao->query("
CREATE TABLE IF NOT EXISTS carrinho (
    id INT AUTO_INCREMENT PRIMARY KEY,
    criado_em TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)");

$conexao->query("
CREATE TABLE IF NOT EXISTS itens_carrinho (
    id INT AUTO_INCREMENT PRIMARY KEY,
    carrinho_id INT,
    produto_id INT,
    quantidade INT,
    FOREIGN KEY (carrinho_id) REFERENCES carrinho(id),
    FOREIGN KEY (produto_id) REFERENCES produtos(id)
)");

/* =========================
   CRIAR CARRINHO NA SESSÃO
========================= */

if (!isset($_SESSION['carrinho_id'])) {
    $conexao->query("INSERT INTO carrinho () VALUES ()");
    $_SESSION['carrinho_id'] = $conexao->insert_id;
}

$carrinho_id = $_SESSION['carrinho_id'];

/* =========================
   INSERIR PRODUTOS BASE
========================= */

$conexao->query("
INSERT IGNORE INTO produtos (id, nome, categoria, marca, fabricante, preco, estoque) VALUES
(1,'Intel Core i5-14600K','CPU','Intel','Intel Corp',832,10),
(2,'Intel Core i7-14700K','CPU','Intel','Intel Corp',1515,8),
(3,'Intel Core Ultra 9 285K','CPU','Intel','Intel Corp',2458,8),
(4,'8GB DDR5','RAM','Kingston','Kingston',200,18),
(5,'16GB DDR5','RAM','Kingston','Kingston',450,35),
(6,'32GB DDR5','RAM','Kingston','Kingston',860,8),
(7,'64GB DDR5','RAM','Kingston','Kingston',1380,5),
(8,'128GB DDR5','RAM','Kingston','Kingston',2250,3),
(9,'RTX 4050','GPU','NVIDIA','SK Hynix',1050,17),
(10,'RTX 4060','GPU','NVIDIA','SK Hynix',1820,22),
(11,'RTX 4070','GPU','NVIDIA','SK Hynix',2100,11),
(12,'RTX 4070 Ti','GPU','NVIDIA','SK Hynix',2720,10),
(13,'RTX 4080','GPU','NVIDIA','Terabyte',4300,8),
(14,'RTX 4090','GPU','NVIDIA','Terabyte',5630,4),
(15,'RTX 5050','GPU','NVIDIA','SK Hynix',1094,12),
(16,'RTX 5060','GPU','NVIDIA','SK Hynix',1931,10),
(17,'RTX 5070','GPU','NVIDIA','SK Hynix',2242,8),
(18,'RTX 5070 Ti','GPU','NVIDIA','Terabyte',2840,15),
(19,'RTX 5080','GPU','NVIDIA','Terabyte',4720,9),
(20,'RTX 5090','GPU','NVIDIA','Terabyte',5890,4),
(21,'Nv2 512 GB','SSD Nvme','Kingston','Kingston',712,16),
(22,'MP600 512 GB','SSD Nvme','Corsair','Corsair',624,5),
(23,'T700 512 GB','SSD','Crucial','Crucial',671,9),
(24,'XPG 512 GB','SSD','ADATA','ADATA',584,14),
(25,'Nv3 1 TB','SSD Nvme','Kingston','Kingston',970,15),
(26,'MP600 1 TB','SSD Nvme','Corsair','Corsair',899,5),
(27,'T700 1 TB','SSD Nvme','Crucial','Crucial',857,9),
(28,'XPG 1 TB','SSD Nvme','ADATA','ADATA',789,7),
(29,'Nv3 2 TB','SSD Nvme','Kingston','Kingston',1927,11),
(30,'MP600 2 TB','SSD Nvme','Corsair','Corsair',1644,8),
(31,'T700 2 TB','SSD Nvme','Crucial','Crucial',1727,9),
(32,'XPG 2 TB','SSD Nvme','ADATA','ADATA',1774,7),
(33,'Nv3 4 TB','SSD Nvme','Kingston','Kingston',3625,8),
(34,'MP600 4 TB','SSD Nvme','Corsair','Corsair',3158,5),
(35,'T700 4 TB','SSD Nvme','Crucial','Crucial',2935,7),
(36,'XPG 4 TB','SSD Nvme','ADATA','ADATA',2896,9),
(37,'Entradas USB 3','USB 3.2','ASUS','ASUS',15,164),
(38,'Entradas USB-C','Thunderbolt','ASUS','ASUS',35,87),
(39,'Ventiladores 3x','Cooler','Redragon','Redragon',170,52),
(40,'Ventiladores 1x','Cooler','ASUS','ASUS',82,88)
");


/* =========================
   ADICIONAR AO CARRINHO
========================= */

if (isset($_POST['add'])) {

    $produto_id = $_POST['produto_id'];
    $qtd = $_POST['quantidade'];

    // verifica estoque
    $stmt = $conexao->prepare("SELECT estoque FROM produtos WHERE id=?");
    $stmt->bind_param("i", $produto_id);
    $stmt->execute();
    $res = $stmt->get_result()->fetch_assoc();

    if ($res['estoque'] >= $qtd) {

        $stmt = $conexao->prepare("
            INSERT INTO itens_carrinho (carrinho_id, produto_id, quantidade)
            VALUES (?, ?, ?)
        ");
        $stmt->bind_param("iii", $carrinho_id, $produto_id, $qtd);
        $stmt->execute();
    }
}

/* =========================
   REMOVER ITEM
========================= */

if (isset($_POST['remover'])) {
    $stmt = $conexao->prepare("DELETE FROM itens_carrinho WHERE id=?");
    $stmt->bind_param("i", $_POST['item_id']);
    $stmt->execute();
}

/* =========================
   FINALIZAR COMPRA
========================= */

if (isset($_POST['finalizar'])) {
    // 1. Inicia transação para garantir que tudo ocorra ou nada ocorra
    $conexao->begin_transaction();

    try {
        $itens = $conexao->query("SELECT * FROM itens_carrinho WHERE carrinho_id = $carrinho_id");
        
        while ($item = $itens->fetch_assoc()) {
            $stmt = $conexao->prepare("UPDATE produtos SET estoque = estoque - ? WHERE id = ?");
            $stmt->bind_param("ii", $item['quantidade'], $item['produto_id']);
            $stmt->execute();
        }

        // 2. Limpar o carrinho após finalizar
        $conexao->query("DELETE FROM itens_carrinho WHERE carrinho_id = $carrinho_id");

        // 3. Finaliza transação
        $conexao->commit();

        // 4. Redireciona
        header('Location: pag_compra.php?msg=compra_finalizada');
        exit;

    } catch (Exception $e) {
        // Se houver erro, reverte as alterações
        $conexao->rollback();
        echo "Erro ao finalizar: " . $e->getMessage();
    }
}



/* =========================
   BUSCAR PRODUTOS
========================= */

$produtos = $conexao->query("SELECT * FROM produtos");

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Oficina de PC</title>

<style>

body {
    margin: 0;
    font-family: Arial;
    background: #1f2c39ff;
    color: white;
}

.container {
    max-width: 1200px;
    margin: auto;
    padding: 20px;
}

/* GRID PRODUTOS */
.grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 15px;
}

.card {
    background: #34495e;
    padding: 15px;
    border-radius: 10px;
}

button {
    margin-top: 10px;
    padding: 10px;
    border: none;
    cursor: pointer;
}

.add { background: #27ae60; color: white; }
.del { background: red; color: white; }
.finish { background: #e67e22; color: white; }

/* TABELA */
table {
    width: 100%;
    margin-top: 40px;
    background: white;
    color: black;
    border-collapse: collapse;
}

th, td { padding: 10px; }
th { background: #2980b9; color: white; }

/* RESUMO */
.resumo {
    background: #1abc9c;
    padding: 20px;
    margin-top: 20px;
    border-radius: 10px;
}

.BTN-VOLTAR {
        display: block;
        text-decoration: none;
        background-color: #3498db;
        color: white;
        padding: 10px;
        border-radius: 8px;
        font-weight: bold;
        transition: 0.3s;
        width: 70px;
        height: 20px;
        text-align: center;
    }

    .BTN-VOLTAR:hover {
        background-color: #2980b9;
    }

</style>
</head>

<body>

<div class="container">

<h1>💻 Componentes de PCs</h1>

<div class="grid">

<?php while($p = $produtos->fetch_assoc()): ?>

<div class="card">
<h3><?= $p['nome'] ?></h3>
<p>Marca: <?= $p['marca'] ?></p>
<p>Fabricante: <?= $p['fabricante'] ?></p>
<p>Preço: R$ <?= number_format($p['preco'],2,',','.') ?></p>
<p>Estoque: <?= $p['estoque'] ?></p>

<form method="POST">
<input type="hidden" name="produto_id" value="<?= $p['id'] ?>">
<input type="number" name="quantidade" value="1" min="1">
<button class="add" name="add">Adicionar</button>
</form>
</div>

<?php endwhile; ?>

</div>

<h2>🛒 Carrinho</h2>

<table>
<tr>
<th>Produto</th>
<th>Qtd</th>
<th>Preço</th>
<th>Ação</th>
</tr>

<?php

$total = 0;

$itens = $conexao->query("
SELECT ic.id, p.nome, p.preco, ic.quantidade
FROM itens_carrinho ic
JOIN produtos p ON p.id = ic.produto_id
WHERE ic.carrinho_id = $carrinho_id
");

while($item = $itens->fetch_assoc()):

$total += $item['preco'] * $item['quantidade'];

?>

<tr>
<td><?= $item['nome'] ?></td>
<td><?= $item['quantidade'] ?></td>
<td>R$ <?= number_format($item['preco'],2,',','.') ?></td>
<td>
<form method="POST">
<input type="hidden" name="item_id" value="<?= $item['id'] ?>">
<button class="del" name="remover">Excluir</button>
</form>
</td>
</tr>

<?php endwhile; ?>

</table>

<div class="resumo">

<h2>📦 Resumo</h2>

<ul>

<?php
    $itens = $conexao->query("
    SELECT p.nome, p.marca, p.fabricante, p.estoque, ic.quantidade
    FROM itens_carrinho ic
    JOIN produtos p ON p.id = ic.produto_id
    WHERE ic.carrinho_id = $carrinho_id
    ");

    while($r = $itens->fetch_assoc()) {
        echo "<li>
        {$r['nome']} | Marca: {$r['marca']} | Fabricante: {$r['fabricante']} | Estoque: {$r['estoque']} | Qtd: {$r['quantidade']}
        </li>";
    }
?>

</ul>

<h3>Total: R$ <?= number_format($total,2,',','.') ?></h3>

    <form method="POST">
    <button class="finish" name="finalizar" href="pag_compra.php">Finalizar Compra</button>

</form>

</div>
    <br>
    <a href="pag_inicio.php" class="BTN-VOLTAR">Voltar</a>
</div>


</body>
</html>
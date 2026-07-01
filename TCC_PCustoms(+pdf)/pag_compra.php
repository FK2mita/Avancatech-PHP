<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Carrinho de compras</title>

<style>
    BODY {
        margin: 0;
        font-family: Arial, sans-serif;
        background-color: #2c3e50;
        display: flex;
        justify-content: center;
        align-items: flex-start;
        padding: 40px 20px;
    }

    .CONTAINER {
        background: white;
        max-width: 900px;
        width: 100%;
        border-radius: 15px;
        box-shadow: 0 10px 25px rgba(0,0,0,0.3);
        overflow: hidden;
    }

    .HEADER {
        background: #e67e22;
        color: white;
        padding: 15px 20px;
        font-size: 22px;
        font-weight: bold;
    }

    .CONTENT {
        display: flex;
        flex-wrap: wrap;
        padding: 20px;
        gap: 20px;
    }

    .IMAGE {
        flex: 1 1 350px;
        text-align: center;
    }

    .IMAGE IMG {
        width: 100%;
        max-width: 400px;
        border-radius: 10px;
        border: 4px solid #e67e22;
    }

    .INFO {
        flex: 1 1 300px;
    }

    .INFO h2 {
        color: red;
        margin-top: 0;
    }

    .INFO p {
        font-size: 16px;
        color: #555;
    }

    .ACTIONS {
        margin-top: 20px;
        display: flex;
        gap: 10px;
        flex-wrap: wrap;
    }

    .BTN {
        text-decoration: none;
        padding: 10px 15px;
        border-radius: 8px;
        color: white;
        font-weight: bold;
        text-align: center;
    }

    .BTN-PRIMARY {
        background: #e67e22;
    }

    .BTN-PRIMARY:hover {
        background: #d35400;
    }

    .BTN-SECONDARY {
        background: #3498db;
    }

    .BTN-SECONDARY:hover {
        background: #2980b9;
    }

    

    /* RESPONSIVO */
    @media (max-width: 600px) {
        .CONTENT {
            flex-direction: column;
            align-items: center;
        }

        .ACTIONS {
            justify-content: center;
        }
    }
</style>
</head>

<body>

<div class="CONTAINER">

    <div class="HEADER">
        Carrinho de Compras
    </div>

    <div class="CONTENT">

        <div class="IMAGE">
            <img src="erro_rob.png" alt="Erro">
        </div>

        <div class="INFO">
            <h2>Página indisponível!</h2>
            <p>Tente novamente mais tarde. Nosso sistema pode estar em manutenção.</p>

            <div class="ACTIONS">
                <a href="pag_pcustoms.php" class="BTN BTN-PRIMARY">Voltar à personalização</a>
                <a href="pag_inicio.php" class="BTN BTN-SECONDARY">Ir para início</a>
            </div>
        </div>

    </div>

</div>

</body>
</html>
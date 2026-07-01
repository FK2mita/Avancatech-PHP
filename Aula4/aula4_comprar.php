<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Aula 4 Compra - </title>

        <style>
            BODY {
                margin: 0;
                height: 100vh;
                display: flex;
                justify-content: center;
                align-items: center;
                background-color: #2c3e50;
                font-family: Arial, sans-serif;
            }

            .CARD-PRODUTOS {
                background-color: #ffffffff;
                padding: 30px;
                border: 3px solid #e67e22;
                border-radius: 20px;
                box-shadow: 0 10px 30px rgba(0,0,0,0.5);
                text-align: left;
                width: 750px;
            }

            .AVATAR1 {
                width: 150px;
                height: 150px;
                border-radius: 75%;
                align-items: center;
                object-fit: cover;
                border: 5px solid #e67e22;
                margin-bottom: 15px;
            }

            .AVATAR2 {
                width: 150px;
                height: 150px;
                border-radius: 75%;
                align-items: center;
                object-fit: cover;
                border: 5px solid #e67e22;
                margin-bottom: 15px;
            }

            .AVATAR3 {
                width: 150px;
                height: 150px;
                border-radius: 75%;
                align-items: center;
                object-fit: cover;
                border: 5px solid #e67e22;
                margin-bottom: 15px;
            }

            .AVATAR4 {
                width: 150px;
                height: 150px;
                border-radius: 75%;
                align-items: center;
                object-fit: cover;
                border: 5px solid #e67e22;
                margin-bottom: 15px;
            }

            .INFO {
                text-align: left;
                margin-bottom:20px;
                font-size: 15px;
                color: #333333;
            }

            .LABEL_PROD {
                font-weight: bold;
                color: #e67e22;
            }

            .BTN-VOLTAR {
                display: block;
                text-align: Center;
                text-decoration: none;
                background-color: #3498db;
                color: white;
                padding: 10px;
                width: 80px;
                border-radius: 8px;
                font-weight: bold;
                transition: 0.3s;
            }

            .BTN-VOLTAR:hover {
                background-color: #2980b9;
            
            }
            .BTN-COMPRAR {
                display: block;
                text-decoration: none;
                background-color: #15d815ff;
                color: white;
                padding: 10px;
                border-radius: 8px;
                font-weight: bold;
                transition: 0.3s;
            }

            .BTN-COMPRAR:hover {
                background-color: #15d815ff;
            }

        </style>
    </head>

    <body>


        <div class="CARD-PRODUTOS">
            <h1>Carrinho de compras</h1>
            <a> </br/> </a>
            <img src="https://images.kabum.com.br/produtos/fotos/564916/notebook-gamer-acer-nitro-v15-intel-core-i5-13420h-8gb-ram-geforce-rtx-3050-ssd-512gb-15-6-fhd-ips-144hz-windows-11-preto-anv15-51-58az_1715197002_gg.jpg" alt="Avatar" class="AVATAR1">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <img src="carrinho-de-compras-comércio-com-marca-exclamação-e-alerta-erro-alarme-símbolo-perigo.jpg" alt="Avatar" class="AVATAR2">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <img src="caixa_erro.jpg" alt="Avatar" class="AVATAR3">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <img src="casa_erro.jpg" alt="Avatar" class="AVATAR4">

            <div class="INFO">
                <h1><FONT COLOR='RED'>Página indisponível!</FONT></h1>
                <p><strong>Tente mais tarde!</strong></p>
            </div>
            <a href="aula4_main.php" class="BTN-VOLTAR">Voltar</a>
        </div>
    </body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Aula 4 Produto - </title>

        <style>
            BODY {
                margin: 0;
                height: 135vh;
                display: flex;
                padding: 5px;
                justify-content: center;
                background-color: #2c3e50;
                font-family: Arial, sans-serif;
            }

            .CARD-PRODUTOS {
                background-color: #ffffffff;
                padding: 50px;
                text-align: Left;
                align-items: Center;
                border: 2px solid #e67e22;
                border-radius: 20px;
                box-shadow: 0 10px 30px rgba(0,0,0,0.5);
                text-align: center;
                width: 400px;
            }

            .CARD-BTN {
                background-color: #e67e22;
                padding: 30px;
                border: 2px solid #000000ff;
                border-radius: 20px;
                box-shadow: 0 10px 30px rgba(0,0,0,0.5);
                text-align: Center;
                width: 125px;
            }

            .AVATAR1 {
                width: 150px;
                height: 150px;
                border-radius: 75%;
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

            .INFO {
                text-align: Left;
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
                text-decoration: none;
                background-color: #3498db;
                color: white;
                padding: 10px;
                width: 100px;
                border-radius: 8px;
                font-weight: bold;
                text-align: center;
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
                width: 100px;
                border-radius: 8px;
                font-weight: bold;
                text-align: center;
                transition: 0.3s;
            }

            .BTN-COMPRAR:hover {
                background-color: #15d815ff;
            }

            .BTN-CONTATO {
                display: block;
                text-decoration: none;
                background-color: #3498db;
                color: white;
                padding: 10px;
                width: 100px;
                border-radius: 8px;
                font-weight: bold;
                text-align: center;
                transition: 0.3s;
            }

            .BTN-CONTATO:hover {
                background-color: #2980b9;
            }

        </style>
    </head>

    <body>
        <div class="CARD-PRODUTOS">
            <img src="https://images.kabum.com.br/produtos/fotos/564916/notebook-gamer-acer-nitro-v15-intel-core-i5-13420h-8gb-ram-geforce-rtx-3050-ssd-512gb-15-6-fhd-ips-144hz-windows-11-preto-anv15-51-58az_1715197002_gg.jpg" alt="Avatar" class="AVATAR1">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <img src="acer_nitro2.jpg" alt="Avatar" class="AVATAR2">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <img src="acer_nitro3.jpg" alt="Avatar" class="AVATAR3">
            
            <h2>Disponíveis para compra</h2>

            <div class="INFO">
                <p><span class="LABEL_PROD">Eletrônicos:</span></p>
                <p><strong>>>>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Notebook ACER NITRO 64GB RTX 5070Ti 2025</strong></p>
                <p>&nbsp;&nbsp;&nbsp;R$ 12.500,00
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <strong>20</strong> disponíveis</p>     
                <a> </br/> </a>
                <p><strong>>>>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Notebook ACER NITRO 32GB RTX 5060 2025</strong></p>       
                <p>&nbsp;&nbsp;&nbsp;R$ 10.450,00
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <strong>36</strong> disponíveis</p>
                <a> </br/> </a>
                <p><strong>>>>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Notebook ACER NITRO 16GB RTX 5060 2025</strong></p>
                <p>&nbsp;&nbsp;&nbsp;R$ 8.750,00
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <strong>47</strong> disponíveis</p>
                <a> </br/> </a>
                <p><strong>>>>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Notebook ACER NITRO 32GB RTX 4070 2024</strong></p>       
                <p>&nbsp;&nbsp;&nbsp;R$ 7.550,00
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <strong>22</strong> disponíveis</p>
                <a> </br/> </a>
                <a> </br/> </a>
                <a href="aula4_main.php" class="BTN-VOLTAR">Voltar</a>
            </div>
        </div>

        <div class="CARD-BTN">
            <a href="aula4_comprar.php" class="BTN-COMPRAR">Comprar</a>
            <a> </br/> </a>
            <a href="aula4_contato.php" class="BTN BTN-CONTATO">Contato</a>
        </div>
    </body>
</html>
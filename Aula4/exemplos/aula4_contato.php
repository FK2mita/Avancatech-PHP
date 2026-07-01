<?php



?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Aula 4 Contato - </title>

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

            .CARD-CONTATO {
                background-color: #ffffff;
                padding: 30px;
                border-radius: 20px;
                box-shadow: 0 10px 30px rgba(0,0,0,0.5);
                text-align: center;
                width: 320px;
            }

            .AVATAR {
                width: 100px;
                height: 100px;
                border-radius: 50%;
                object-fit: cover;
                border: 3px solid #3498db;
                margin-bottom: 15px;
            }

            .INFO {
                text-align: left;
                margin-bottom:20px;
                font-size: 14px;
                color: #333333;
            }

            .LABEL {
                font-weight: bold;
                color: #3498db;
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
            }

            .BTN-VOLTAR:hover {
                background-color: #2980b9;
            }
        </style>
    </head>

    <body>
        <div class="CARD-CONTATO">
            <img src="https://i.pravatar.cc" alt="Avatar" class="AVATAR">

            <h2>Dados do Contato</h2>

            <div class="INFO">
                <p><span class="LABEL">Nome:</span> João Exemplo</p>
                <p><span class="LABEL">Email:</span> joao@contato.com.br</p>
                <p><span class="LABEL">Idade:</span> 25 anos</p>
                 <p><span class="LABEL">Endereço:</span> Rua Tech, 404</p>
            </div>
            <a href="aula4_main.php" class="BTN-VOLTAR">Voltar</a>
        </div>
    </body>
</html>
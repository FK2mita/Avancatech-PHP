<?php



?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Aula 4 Main - </title>

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

            .CARD {
                background-color: #ffffff;
                padding: 40px;
                border-radius: 20px;
                box-shadow: 0 10px 30px rgba(0,0,0,0.5);
                text-align: center;
                width: 300px;
            }

            .BTN {
                display: block;
                width: 100%;
                box-sizing: border-box;
                padding: 15px;
                margin: 10px 0;
                text-decoration: none;
                font-weight: bold;
                border-radius: 10px;
                transition: 0.3s;
            }

        .BTN-CONTATO {
            background-color: #3498db;
            color: white;
        }

        .BTN-CONTATO:hover {
            background-color: #2980b9;
        }

        .BTN-PRODUTO {
            background-color: #e67e22;
            color: white;
        }
        </style>
    </head>

    <body>
        <div class="CARD">
            <h2>Menu Principal</h2>
            <a href="aula4_contato.php" class="BTN BTN-CONTATO">CONTATO</a>

            <a href="#" class="BTN BTN-PRODUTO">PRODUTO</a>
        </div>


    </body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> PCustoms - Início - </title>

        <style>
            BODY {
                background-image: url('background_chip.png');
                background-size: cover;
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .CARD {
                background-color: #ffffff;
                padding: 50px;
                border: 2px solid #000000ff;
                border-radius: 20px;
                box-shadow: 0 10px 30px rgba(0,0,0,0.5);
                text-align: center;
                width: 750px;
                height: 600px;
            }

            .AVATAR1 {
                width: 350px;
                height: 250px;
                border-radius: 20px;
                align-items: center;
                object-fit: cover;
                border: 5px solid #e67e22;
                margin-bottom: 15px;
            }

            .AVATAR2 {
                width: 350px;
                height: 250px;
                border-radius: 20px;
                align-items: center;
                object-fit: cover;
                border: 5px solid #e67e22;
                margin-bottom: 15px;
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
            background-color: #e7720cff;
            color: white;
        }
        </style>
    </head>

    <body>
        <div class="CARD">
            <h1>PCustoms<h1>
            <img src="pc_gamer1.png" alt="Avatar" class="AVATAR1">
            <img src="pc_gamer2.png" alt="Avatar" class="AVATAR2">

            <h2>Menu Principal</h2>

            <a href="pag_pcustoms.php" class="BTN BTN-PRODUTO">CRIAR MÁQUINA</a>
            <br><br>
            <a href="pag_contato.php" class="BTN BTN-CONTATO">CONTATO</a>

        </div>


    </body>
</html>
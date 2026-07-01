<?php

// =========================================================================
// 1. A CLASSE COM MÉTODOS MÁGICOS
// =========================================================================
class LacaioDemonico {
    
    // Uma propriedade privada normal
    private $nome;
    
    // O "Saco Sem Fundo": Um array privado onde esconderemos nossos atributos mágicos
    private $atributosOcultos = [];

    // MÁGICO 1: O Construtor (Dispara ao usar o 'new')
    public function __construct($nomeEscolhido) {
        $this->nome = $nomeEscolhido;
    }

    // =========================================================================
    // A VERDADEIRA MAGIA COMEÇA AQUI
    // =========================================================================

    // MÁGICO 2: __set() -> Dispara automaticamente quando você tenta GRAVAR 
    // um valor em uma variável que não existe ou que é privada!
    public function __set($nomeDaVariavel, $valorDaVariavel) {
        // Em vez de dar erro, ele guarda a informação no nosso array secreto
        $this->atributosOcultos[$nomeDaVariavel] = $valorDaVariavel;
    }

    // MÁGICO 3: __get() -> Dispara automaticamente quando você tenta LER 
    // o valor de uma variável que não existe ou que é privada!
    public function __get($nomeDaVariavel) {
        // Ele procura no array secreto e devolve, criando a ilusão de que a variável existe
        if (array_key_exists($nomeDaVariavel, $this->atributosOcultos)) {
            return $this->atributosOcultos[$nomeDaVariavel];
        }
        return "Atributo não encontrado no submundo.";
    }

    // MÁGICO 4: __toString() -> Dispara automaticamente se você tentar 
    // dar um 'echo' no OBJETO INTEIRO (o que normalmente daria um erro fatal).
    public function __toString() {
        return "
            <div class='card-lacaio'>
                <h2>👿 {$this->nome}</h2>
                <ul>
                    <li><b>Força:</b> " . ($this->atributosOcultos['forca'] ?? 0) . "</li>
                    <li><b>Mana Corrompida:</b> " . ($this->atributosOcultos['mana'] ?? 0) . "</li>
                    <li><b>Poder Especial:</b> " . ($this->atributosOcultos['habilidade'] ?? 'Nenhum') . "</li>
                </ul>
            </div>
        ";
    }
}

// =========================================================================
// 2. EXECUTANDO (E Vendo a mágica acontecer sem chamar as funções)
// =========================================================================

// Dispara o __construct() sozinho
$meuLacaio = new LacaioDemonico("Diabrete das Chamas");

// ATENÇÃO AQUI: A classe LacaioDemonico NÃO TEM as variáveis 'forca', 'mana' ou 'habilidade'.
// Na POO normal, isso daria um Erro Fatal.
// Mas aqui, o PHP dispara o __set() secretamente e guarda tudo no array $atributosOcultos!
$meuLacaio->forca = 250;
$meuLacaio->mana = 500;
$meuLacaio->habilidade = "Bola de Fogo Vil";

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Grimório - Métodos Mágicos</title>
    <style>
        body {
            background-color: #0d0d0d;
            color: #d4af37;
            font-family: 'Georgia', serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 40px;
        }
        h1 {
            border-bottom: 2px solid #8b0000;
            padding-bottom: 10px;
            text-transform: uppercase;
            letter-spacing: 3px;
        }
        .container {
            display: flex;
            gap: 20px;
            margin-top: 20px;
        }
        .card-lacaio {
            background: #1a1a1d;
            border: 2px solid #551a8b; /* Roxo escuro para magia */
            border-radius: 8px;
            padding: 20px;
            width: 300px;
            box-shadow: 0 0 20px rgba(85, 26, 139, 0.5);
        }
        .card-lacaio h2 {
            margin-top: 0;
            color: #ff4500; /* Laranja fogo */
            text-align: center;
        }
        .card-lacaio ul {
            list-style: none;
            padding: 0;
        }
        .card-lacaio li {
            background: #222;
            margin: 5px 0;
            padding: 10px;
            border-left: 3px solid #ff4500;
        }
        .log-sistema {
            background: #222;
            border: 1px dashed #d4af37;
            padding: 15px;
            margin-top: 30px;
            width: 80%;
            max-width: 600px;
            color: #ccc;
            font-family: 'Courier New', monospace;
        }
    </style>
</head>
<body>

    <h1>Grimório de Invocação</h1>

    <div class="container">
        <?php 
            // A MAIOR MAGIA DE TODAS: 
            // Estamos dando 'echo' na variável inteira do objeto!
            // Isso aciona o __toString() automaticamente, que cospe o HTML bonitinho na tela.
            echo $meuLacaio; 
        ?>
    </div>

    <div class="log-sistema">
        <b>📝 Log do Sistema (Testando o __get):</b><br>
        Tentando ler a força do lacaio diretamente do banco de dados sombrio:<br>
        > Força atual: 
        <?php 
            // Aqui ele dispara o __get() sozinho, pois 'forca' não existe como variável física.
            echo $meuLacaio->forca; 
        ?>
    </div>

</body>
</html>
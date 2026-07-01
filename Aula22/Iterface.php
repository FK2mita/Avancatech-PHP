<?php

// =========================================================================
// 1. A INTERFACE (O Contrato / A Regra Pura)
// =========================================================================
// Diferente de 'class', usamos a palavra 'interface'.
// Todo mundo que "implementar" essa interface é OBRIGADO a ter essas duas funções.
interface Combatente {
    public function atacarBasico();
    public function usarEspecial();
}

// =========================================================================
// 2. AS CLASSES CONCRETAS (Os Aventureiros)
// =========================================================================

// O Guerreiro assina o contrato usando a palavra 'implements'
class Guerreiro implements Combatente {
    
    public function atacarBasico() {
        return "⚔️ <b>Golpe de Machado:</b> O guerreiro levanta seu machado duplo e o derruba de forma brutal!";
    }

    public function usarEspecial() {
        return "🛡️ <b>Muralha de Escudos:</b> O guerreiro posiciona seu escudo e ignora o próximo ataque inimigo.";
    }
}

// O Bruxo assina o MESMO contrato, mas resolve as regras do jeito dele!
class BruxoDemonologia implements Combatente {
    
    public function atacarBasico() {
        return "🔥 <b>Seta Sombria:</b> O bruxo dispara seta carregada com energia corrompida contra o alvo!";
    }

    public function usarEspecial() {
        return "👿 <b>Evocar Demônio:</b> O bruxo invoca um portal sombrio e invoca um diabrete lacaio para lutar ao seu lado!";
    }
}

// =========================================================================
// 3. FRONT-END: EXECUTANDO E RENDERIZANDO (O Log de Combate)
// =========================================================================

// Instanciamos nossos heróis
$heroi1 = new Guerreiro();
$heroi2 = new BruxoDemonologia();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Log de Combate - Avaça Tech</title>
    <style>
        body {
            background-color: #1a1a1d;
            color: #e8d8c3;
            font-family: 'Trebuchet MS', serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }
        .arena {
            background: #222;
            border: 2px solid #8b0000;
            border-radius: 10px;
            padding: 30px;
            width: 80%;
            max-width: 600px;
            box-shadow: 0px 10px 30px rgba(0,0,0,0.8);
        }
        h1 {
            text-align: center;
            color: #d4af37;
            text-transform: uppercase;
            border-bottom: 1px solid #d4af37;
            padding-bottom: 10px;
        }
        .turno {
            background: #111;
            margin: 15px 0;
            padding: 15px;
            border-left: 5px solid #d4af37;
            border-radius: 0 5px 5px 0;
        }
        .nome-classe {
            color: #ffebcd;
            font-size: 1.2em;
            margin-bottom: 10px;
            text-shadow: 1px 1px #000;
        }
        .acao {
            margin: 5px 0;
            line-height: 1.5;
        }
    </style>
</head>
<body>

    <div class="arena">
        <h1>🗡️ Arena de Treinamento 🗡️</h1>
        
        <div class="turno">
            <div class="nome-classe">Tártarus, o Guerreiro</div>
            <div class="acao"><?php echo $heroi1->atacarBasico(); ?></div>
            <div class="acao"><?php echo $heroi1->usarEspecial(); ?></div>
        </div>

        <div class="turno">
            <div class="nome-classe" style="border-left-color: #8a2be2;">Erebus, o Bruxo</div>
            <div class="acao"><?php echo $heroi2->atacarBasico(); ?></div>
            <div class="acao"><?php echo $heroi2->usarEspecial(); ?></div>
        </div>

    </div>

</body>
</html>
<?php
// Arquivo: Personagem.php

class Personagem {
  
    public $nome;
    public $vida;
    public $poderDeAtaque;

    
    public function atacar() {
        echo "<p>O personagem <b>{$this->nome}</b> atacou causando <b>{$this->poderDeAtaque}</b> de dano!</p>";
    }

    
    public function receberDano($danoSofrido) {
        $this->vida = $this->vida - $danoSofrido;
        echo "<p><b>{$this->nome}</b> recebeu um golpe! A vida caiu para: <b>{$this->vida}</b>.</p>";
    }
}
?>

<?php
//------------------------------------------------------------------------------
// Arquivo: Guerreiro.php

// Puxamos o arquivo que contém a classe base
require_once 'Personagem.php';

// A classe Guerreiro HERDA (extends) tudo o que existe na classe Personagem
class Guerreiro extends Personagem {
    
    
    public $pontosDeArmadura;

    public function defender() {
        echo "<p>O guerreiro <b>{$this->nome}</b> levantou o escudo e usou sua armadura de {$this->pontosDeArmadura} pontos!</p>";
    }
}



// Criamos um novo objeto baseado na classe Guerreiro
$Heroi = new Guerreiro();

// PREENCHENDO AS VARIÁVEIS HERDADAS
// Note que 'nome', 'vida' e 'poderDeAtaque' vieram de graça do arquivo Personagem.php!
$Heroi->nome = "Mega Man";
$Heroi->vida = 100;
$Heroi->poderDeAtaque = 25;


$Heroi->pontosDeArmadura = 50;

echo "<h3>Testando o Herói:</h3>";

// USANDO AS FUNÇÕES HERDADAS
$Heroi->atacar();           // Função que veio da classe Personagem
$Heroi->receberDano(15);    // Função que veio da classe Personagem

// USANDO A FUNÇÃO PRÓPRIA
$Heroi->defender();         // Função exclusiva da classe Guerreiro

?>
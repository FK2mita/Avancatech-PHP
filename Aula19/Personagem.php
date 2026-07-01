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
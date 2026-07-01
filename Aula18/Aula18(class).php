<?php

class Pessoa {
    public $nome = ' ';
    
    public function alterarNome($novoNome) {
        $this->nome = $novoNome;
    }
}

class Usuario extends Pessoa {
    public $login;

    public function alterarLogin($novoLogin) {
        $this->login = $novoLogin;
    }
}

$usuario = new Usuario();
$usuario->alterarNome('João');

echo $usuario->nome;

?>
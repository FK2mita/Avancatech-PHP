<?php
//ENCAPSULAMENTO
class Pessoa{

    public $nome = 'João Henrique';
    
    private $cpf = '12345678900';
    
    protected $senha = '4321';
    
    public function verPropriedades(){
        
        echo $this->nome.'<br/>';
        echo $this->cpf.'<br/>';
        echo $this->senha.'<br/>';
        
    }
    
}

$joao = new Pessoa();
$joao->verPropriedades();//Mostrará todos.
echo $joao->nome.'<br/>';//Mostrará: João Henrique
echo $joao->cpf.'<br/>';//Erro Fatal.
echo $joao->senha.'<br/>';//Erro Fatal.

class Usuario extends Pessoa{
    
    public function verPropriedades2() {
        
        echo $this->nome.'<br/>';//Mostrará: João Henrique
        echo $this->cpf.'<br/>';//Não mostrará nada.
        echo $this->senha.'<br/>';//Mostrará: 4321
        
    }
    
}

$user = new Usuario();
$user->verPropriedades2();
echo $user->nome.'<br/>';//Mostrará: João Henrique
echo $user->cpf.'<br/>';//Não mostrará nada.
echo $user->senha.'<br/>';//Erro Fatal.

?>
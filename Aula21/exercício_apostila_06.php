<?php

$servidor = "localhost"; // "localhost" significa que o banco está no seu próprio computador
$usuario = "root";       // "root" é o usuário chefe padrão em ambientes de estudo (XAMPP/WAMP)
$senha = "123456";             // A senha padrão costuma ser vazia (em branco)
$banco = "usuarios";     // O nome do banco (que aparece na linha 1 da sua foto: "use usuarios;")

// Arquivo Banco.class.php salvo dentro do diretório "class"

class Banco {
    
    // protected significa que só a classe (e suas filhas) acessa a conexão direta
    protected $conn; 
    public $result;  

    // O Construtor
    public function __construct() {

        global $servidor, $usuario, $senha, $banco;
        
        $this->conn = mysqli_connect($servidor, $usuario, $senha, $banco);
        
        // Bônus: Um aviso amigável caso o banco de dados esteja desligado no XAMPP
        if (!$this->conn) {
            die("Erro fatal: Não foi possível conectar ao banco de dados. " . mysqli_connect_error());
        }
    }
    // O método Query
    // Recebe o comando SQL e guarda a tabela de resultados na propriedade $result
    public function query($query) {
        echo "conectado com sucesso</br>";
        $this->result = mysqli_query($this->conn, $query);
        echo "metodo Query com sucesso</br>";
    }

    // Conta quantas linhas vieram na consulta e devolve o número
    public function total() {
        echo "total com sucesso</br>";
        return mysqli_num_rows($this->result);
    }

    // O Destrutor
    // Quando a página terminar de carregar, ele fecha a porta do banco automaticamente
    public function __destruct() {
        if ($this->conn) {
            echo "Destruído com sucesso!!!</br>";
            mysqli_close($this->conn);
        }
    }
}


echo "<h3>Iniciando os testes na tela:</h3>";

// Instanciando a classe
$meuBanco = new Banco();

// Chamando o método query e acionando os seus echos!

$meuBanco->query("SHOW TABLES"); 

echo "<br>"; 


$quantidade = $meuBanco->total();
echo "<br><b>Resultado:</b> O banco encontrou " . $quantidade . " registro(s).<br><br>";



?>
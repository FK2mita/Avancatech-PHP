<?php

$servidor = "localhost";
$usuario = "root";
$senha = "123456";
$banco = "usuarios";

class Banco {
    protected $conn;
    public $result;

    public function __construct() {
        global $servidor, $usuario, $senha, $banco;

        $this->conn = mysqli_connect($servidor, $usuario, $senha, $banco);

        if (!$this->conn) {
            die("Erro fatal: Não foi possível conectar ao banco de dados." . mysqli_connect_error());
        }
    }

    public function query($query) {
        echo "conectado com sucesso</br>";
        $this->result = mysqli_query($this->conn, $query);
        echo "metodo Query com sucesso</br>";
    }

    public function total() {
        echo "total com sucesso</br>";
        return mysqli_num_rows($this->result);
    }

    public function __destruct() {
        if ($this->conn) {
            echo "Destruído com sucesso!!!</br>";
            mysqli_close($this->conn);
        }
    }

}

echo "<h3>Iniciando os testes na tela:</h3>";

$meuBanco = new Banco();
echo"<br>";

$meuBanco->query("SHOW TABLES"); 
echo "<br>"; 

$quantidade = $meuBanco->total();
echo "<br><b>Resultado:</b> O banco encontrou " . $quantidade . " registrou(s).<br><br>";

?>
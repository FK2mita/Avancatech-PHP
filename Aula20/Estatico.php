<?php

class Calculadora {
    
    // Propriedade estática: Um valor fixo que pertence à classe como um todo
    public static $valorDoPi = 3.14159;

    // Método Estático 1: Apenas recebe dois números e devolve a soma
    public static function somar($a, $b) {
        return $a + $b;
    }

    // Método Estático 2: Verifica uma regra de negócio (se é par ou ímpar)
    public static function verificarPar($numero) {
        if ($numero % 2 == 0) {
            return "Sim, o número $numero é par.";
        } else {
            return "Não, o número $numero é ímpar.";
        }
    }

    // Método Estático 3: Usa a propriedade estática lá de cima para fazer uma conta
    public static function calcularAreaCirculo($raio) {
        // Como a variável é estática, usamos self:: em vez de $this->
        $area = self::$valorDoPi * ($raio * $raio);
        return $area;
    }
}

// =========================================================================
// A GRANDE DIFERENÇA NA PRÁTICA: O USO DIRETO (SEM A PALAVRA 'NEW')
// =========================================================================

echo "<h2>Testando a Classe Estática</h2>";

/*  
 $minhaCalc = new Calculadora();
 echo $minhaCalc->somar(10, 5);
*/

// ✅ COMO É COM MÉTODOS ESTÁTICOS:
// Você chama o Nome da Classe, coloca dois pontos duplos (::) e usa a ferramenta direto!

echo "<b>1. Testando a Soma:</b><br>";
echo "A soma de 50 e 25 é: " . Calculadora::somar(50, 25) . "<br><br>";

echo "<b>2. Testando o Verificador:</b><br>";
echo "O número 8 é par? " . Calculadora::verificarPar(8) . "<br><br>";

echo "<b>3. Testando a Área:</b><br>";
echo "A área de um círculo com raio 5 é: " . Calculadora::calcularAreaCirculo(5) . "<br><br>";

echo "<b>4. Acessando a variável direto:</b><br>";
echo "O valor de PI guardado no sistema é: " . Calculadora::$valorDoPi;

?>
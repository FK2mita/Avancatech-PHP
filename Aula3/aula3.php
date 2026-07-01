<html>
    <head>
        <title> Meu primeiro site </title>
    </head>

    <body>
        <h1>Bom dia</h1>
    </body>
</html>

<?php
$espaço = '<br/>';

echo "Boa Tarde <br><br>";
echo "Boa Tarde <br><br>";
echo "Boa Tarde <br><br>";
echo "Boa Tarde <br><br>";

$nome = 'Fátima';
$nomecompleto = "$nome Bernardes";

var_dump($nomecompleto);
echo $espaço;

$paises = array('Brasil', 'Argentina', 'Estados Unidos', 'Canadá');

var_dump($paises);
echo '<br/>';

$br = '<br/>';

$a = 5 / 2;
$b = 10 / '2 alunos.';
$c = '3D'*2;
$d = 1.5*'-3x';

var_dump($a);
echo '<br/>';
var_dump($b);
echo '<br/>';
var_dump($c);
echo '<br/>';
var_dump($d);
echo '<br/>';
echo '<br/>';

echo (int)5.5 * 3;
echo '<br/>';
echo (int)(5.5 * 3);

$nome = 'José da Silva';
echo '<br/>';
echo "Nome: ".$nome;
echo '<br/>';
echo "<strong>Nome: </strong>".$nome;
echo '<br/>';



?>
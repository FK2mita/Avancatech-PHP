<?php
    define("TITULO","Treinamento PHP I");

    define("HOME","home.php");
    define("CADASTRO","cadastro.php");
    define("PRODUTOS","produtos.php");

?>



<!DOCTYPE html>
    <head>
        <title><?php echo TITULO?></title>
    </head>

    <body>
        <a href="<?php echo HOME?>">Home</a> <br/>
        <a href="<?php echo CADASTRO?>">Cadastro</a> <br/>
        <a href="<?php echo PRODUTOS?>">Produtos</a> <br/>
    </body>
</html>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8"/>
    <title>Operadores de Atribuição</title>
    <link rel="stylesheet" href="_css/estilo.css"/>
</head>
<body>
<div>
    <?php
    /*
       ++$a  pré-incremento: primeiro incrementa a variável para depois usá-la
       $a++  pós-incremento: usa a variável, depois incrementa

       --$a  pré-decremento: primeiro decrementa a variável para depois usá-la
       $a--  pós-decremento: usa a variável, depois decrementa
     */

    $ano = $_GET["ano"];
    echo "<h2>O ano recebido foi $ano</h2>";
    echo "<h4>Decremento</h4>";
    echo "O ano anterior é " . --$ano . " - com pré-decremento, primeiro diminuiu para depois mostrar o ano.</br></br>";
    $ano = $_GET["ano"];
    echo "O ano anterior é " . $ano-- . " - com pós-decremento, primeiro mostra o ano para depois diminuir.</br></br>";

    echo "<h4>Incremento</h4>";
    $ano = $_GET["ano"];
    echo "O ano posterior é " . ++$ano . " - com pré-incremento, primeiro incrementa para depois mostrar o ano.</br></br>";
    $ano = $_GET["ano"];
    echo "O ano posterior é " . $ano++ . " - com pós-incremento, primeiro mostra o ano para depois incrementar.</br></br>";

    ?>
</div>
</body>
</html>
 
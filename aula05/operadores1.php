<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8"/>
    <title>Curso de PHP - Curso em Vídeo</title>
    <link rel="stylesheet" href="_css/estilo.css"/>
</head>
<body>
<div>
    <?php
    $n1 = $_GET["a"]; // Atribui à variável n1 o valor de 'a' passado por parametro na URL
    $n2 = $_GET["b"]; // Atribui à variável n2 o valor de 'b' passado por parametro na URL
    $soma = $n1 + $n2;
    $produto = $n1 * $n2;
    $sub = $n1 - $n2;
    $divisao = $n1 / $n2;
    $modulus = $n1 % $n2;

    echo "<h2>Valores recebidos: n1 = $n1 e n2 = $n2</h2>";
    echo "A soma de $n1 e $n2 é igual a $soma.</br>";
    echo "A diferença de $n1 e $n2 é igual a $sub.</br>";
    echo "O produto de $n1 e $n2 é igual a $produto.</br>";
    echo "A divisão de $n1 e $n2 é igual a $divisao.</br>";
    echo "O módulo de $n1 e $n2 é igual a $modulus.</br>";
    ?>
</div>
</body>
</html>
 
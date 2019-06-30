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
 * = atribuição: $n1 = 2  A variável n1 recebe o valor 2
 *
 * += atribuição com adição: $n1 += 5 A variável n1 recebe o valor já guardado somado a 5
 * ++ atalho para atribuição com adiçao de 1 unidade: $n1++ A variável n1 recebe o valor já guardado somado a 1
 *
 * -= atribuição com subtração: $n1 -= 5 A variável n1 recebe o valor já guardado menos 5
 * -- atalho para atribuição com adiçao de 1 unidade: $n1-- A variável n1 recebe o valor já guardado menos 1
 *
 * *= atribuição com multiplicação: $n1 *= 5 A variável n1 recebe o valor já guardado multiplicado por 5
 * /= atribuição com divisão: $n1 /= 5 A variável n1 recebe o valor já guardado dividido por 5
 *
 */

    $preco = $_GET['p'];
    echo "<h2>O preço recebido é R$".number_format($preco,2,",",".")."</h2>";
    $preco *=1.1;
    echo "Novo preço com 10% de aumento será R$: ".number_format($preco,2,",",".")."</br>";
    $preco = $_GET['p'];
    $preco -= $preco*10/100;
    echo "Novo preço com 10% de desconto será R$: ".number_format($preco,2,",",".")."</br>";
//    $preco *=1.1;
//    echo "Com 10% de aumento fica: ".$preco."</br>";



    ?>
</div>
</body>
</html>
 
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8"/>
    <title>Operadores Relacionais</title>
    <link rel="stylesheet" href="_css/estilo.css"/>
</head>
<body>
<div>
    <?php
    /*
            COMPARADORES BINÁRIOS (dois elementos)
            >   Maior
            <   Menor
            >=  Maior igual
            <=  Menor igual
            <>  Diferente
            !=  Diferente (não igual)
            ==  Igual (testa o conteúdo)
            === Idêntico (testa o tipo e o conteúdo)

            COMPARADORES UNÁRIOS
            ? :   ->  expressão ? valor_se_verdadeiro : valor_se_falso
            $maior = $a>$b ? $a : $b (se $a maior que $b, $maior recebe o valor de $a, senão $maior recebe $b

     */
//    $tipo = $_GET["opt"];
    $n1 = $_GET["n1"];
    $n2 = $_GET["n2"];
    $media = ($n1+$n2)/2;

    echo "<h2>Valores recebidos:<br>n1 = $n1<br>n2 = $n2</h2>";
    $situacao = $media < 6 ? "Reprovado" : "Aprovado";
    echo "A situação do aluno é: $situacao.<br>";
    echo "<hr>";
    echo "Com as notas $n1 e $n2 o aluno está ".(($media<6)?"reprovado.<br>":"aprovado.<br>");


    ?>
</div>
</body>
</html>
 
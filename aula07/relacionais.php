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

            COMPARADOR TERNÁRIO
            ? :   ->  expressão ? valor_se_verdadeiro : valor_se_falso
            $maior = $a>$b ? $a : $b (se $a maior que $b, $maior recebe o valor de $a, senão $maior recebe $b

     */
    $tipo = $_GET["opt"];
    $n1 = $_GET["a"];
    $n2 = $_GET["b"];

    echo "<h2>Valores recebidos:<br>opt = $tipo<br>n1 = $n1<br>n2 = $n2</h2>";
    $res = ($tipo == 's') ? $n1 + $n2 : $n1 * $n2;
    if ($tipo == 's') {
        echo "Exibindo $n1+$n2 = $res<br>";
    } else {
        echo " Exibindo $n1*$n2 = $res<br>";
    }
    echo "<hr>";
    $a = 3;
    $b = "3";

    echo "\$a = ";
    echo var_dump($a);
    echo "<br>";

    echo "\$b = ";
    echo var_dump($b);
    echo "<br><br>";

    $igual = $a==$b ? "Sim" : "Não";
    echo "As variáveis \$a e \$b são iguais? $igual <br>";

    $identico = $a===$b ? "Sim" : "Não";
    echo "As variáveis \$a e \$b são idênticas? $identico <br>";


    ?>
</div>
</body>
</html>
 
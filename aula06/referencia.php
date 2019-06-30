<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8"/>
    <title>Passagem de valor por referência</title>
    <link rel="stylesheet" href="_css/estilo.css"/>
</head>
<body>
<div>
    <?php
    /*
        $a = 3;
        $b = $a;  Passa o valor da variável 'a' para 'b'
        $b += 5;
        echo $a -> 3
        echo $b -> 8

        $a = 3;
        $b = $&a; Passa a variável 'a' como referência para 'b' (cria uma ligação)
        $b += 5;
        echo $a -> 8
        echo $b -> 8
     */

    $a = $_GET["a"];
    $b = $a;
    $b += 5;
    echo "<h2>[a] recebe o valor $a</h2></br>";
    echo "\$b = \$a; //passa o valor de \$a</br>";
    echo "\$b += 5;</br>";
    echo "A variável [a] vale $a</br>";
    echo "A variável [b] vale $b</br>";

    echo "<hr>";

    $a = $_GET["a"];
    echo "<h2>[a] recebe o valor $a</h2></br>";

    $b = &$a;
    $b += 5;
    echo "\$b = &\$a; //passa \$a por referência</br>";
    echo "\$b += 5;</br>";
    echo "A variável [a] vale $a</br>";
    echo "A variável [b] vale $b</br>";


    ?>
</div>
</body>
</html>
 
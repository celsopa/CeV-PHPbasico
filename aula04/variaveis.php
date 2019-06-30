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

    $var1 = 1; //número (inteiro)
    $var2 = 2.5;  //número (float)
    $var3 = "casa";  //string
    $var4 = true; //booleano

    echo "A variável \$var1 = $var1 é do tipo ".gettype($var1).".</br>";
    echo "A variável \$var2 = $var2 é do tipo ".gettype($var2).".</br>";
    echo "A variável \$var3 = $var3 é do tipo ".gettype($var3).".</br>";
    echo "A variável \$var4 = $var4 é do tipo ".gettype($var4).".</br>";


    $nome = "Celso";
    $idade = 32;
    echo "</br></br>";
    echo "$nome tem $idade anos!";

    ?>
</div>
</body>
</html>
 
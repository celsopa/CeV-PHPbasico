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
    /*
        O comando DO...WHILE executa um bloco de comando e depois da execução faz uma verificação da condição
        de parada e repete o bloco enquanto a condição for verdadeira.
        O bloco de comando é executado PELO MENOS 1 VEZ, já que a verificação é feita por último.
    */

    $c = 1;
    do {
        echo "$c&nbsp&nbsp";
        $c++;
    } while ($c<=10);
    echo "<hr>";
    $c = 2;
    do {
        echo "$c&nbsp&nbsp";
        $c+=2;
    }while ($c<=0)
    ?>
</div>
</body>
</html>
 
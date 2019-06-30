<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8"/>
    <title>Variáveis de variáveis</title>
    <link rel="stylesheet" href="_css/estilo.css"/>
</head>
<body>
<div>
    <?php
    /*
            Variáveis de variáveis ou Variáveis variantes
       - cria uma variável com nome igual ao conteúdo de outra variável.

        $fixa = "qualquer_nome"
        $$fixa = true   -> o nome dessa variável é $qualquer_nome

        echo $qualquer_nome   -> exibe [true]

     */

    $dado = $_GET["nome"];
    $$dado = $_GET["valor"];

    echo "<h3>O nome da variável desejado é [$dado]</h3>";
    echo "<h3>O valor da variável é [" . $$dado . "]</h3>";
    echo "<hr>";
    echo "Imprimindo dado desejado: \$$dado = " . $$dado . "</br>";
    ?>
</div>
</body>
</html>
 
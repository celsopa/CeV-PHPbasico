<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8"/>
    <title>Operadores Lógicos</title>
    <link rel="stylesheet" href="_css/estilo.css"/>
</head>
<body>
<div>
    <?php
    /*
        && ou and   -> para ser verdadeiro, ambas sentenças devem ser verdadeiras
        || ou or    -> para ser verdadeiro, uma das sentenças deve ser verdadeira
              xor   -> para ser verdadeiro, apenas umas das sentenças pode ser verdadeira
              !     -> nega o valor da sentença, se for verdadeira torna falsa, se for falsa torna verdadeira
     */
    $ano = $_GET["nasc"];
    $idade = "2019" - $ano;

    echo "<h2>Quem nasceu em $ano tem $idade anos.</h2>";
    $situacao = ($idade>16 && $idade<65) ? "obrigatório" : "não obrigatório";
    echo "Seu voto é $situacao.<br>";

    ?>
</div>
</body>
</html>
 
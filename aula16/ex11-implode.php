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
    $a[0] = "Todo";
    $a[1] = "mundo";
    $a[2] = "odeia";
    $a[3] = "o";
    $a[4] = "Cris!";
    $res1 = implode("|||",$a);
    echo "$res1";
    echo "<hr>";

    $res2 = join("...",$a);
    echo "$res2";

    ?>
</div>
</body>
</html>
 
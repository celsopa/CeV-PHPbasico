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
    $cont = 1;
    echo "<h2>Contangem progressiva</h2>";
    while ($cont <=10){
        echo "$cont<br>";
        $cont++;
    }
    echo "<hr>";

    $cont = 10;
    echo "<h2>Contangem regressiva</h2>";
    while ($cont >0){
        echo "$cont<br>";
        $cont--;
    }
    echo "<hr>";

    ?>
</div>
</body>
</html>
 
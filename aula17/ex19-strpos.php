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
    $txt = "A sorte sorri aos audazes.";
    $pos = strpos($txt, "sorri"); //case sensitive
    echo "$txt<br>";
    echo "A string ['sorri'] foi encontrada no índice $pos.<br>";
    echo "<hr>";
    $pos = strpos($txt, "SORRI"); //case sensitive $pos = false
    echo "A string ['SORRI'] foi encontrada no índice $pos.<br>";
    ?>
</div>
</body>
</html>
 
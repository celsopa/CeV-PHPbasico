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
    echo "$txt<br>";
    echo "<hr>";
    $pos = stripos($txt, "sorri"); //não é case sensitive
    echo "A string ['sorri'] foi encontrada no índice $pos.<br>";
    $pos = stripos($txt, "SORRI"); //não é case sensitive
    echo "A string ['SORRI'] foi encontrada no índice $pos.<br>";
    ?>
</div>
</body>
</html>
 
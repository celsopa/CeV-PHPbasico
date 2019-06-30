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
    $txt = "   Vivamus magna justo  ";
    $res = strlen($txt);
    echo "A string [$txt] tem $res letras.";
    echo "<hr>";
    $txtrim = trim($txt);
    $restrim = strlen($txtrim);
    echo "A string [$txtrim] tem $restrim letras.";
    ?>
</div>
</body>
</html>
 
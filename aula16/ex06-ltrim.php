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
    $txt = "&nbsp&nbspVivamus magna justo&nbsp&nbsp&nbsp";
    $res = strlen($txt);
    echo "A string [$txt] tem $res letras.";
    echo "<hr>";
    echo "Uso do ltrim<br>";
    $txtltrim = ltrim($txt, "&nbsp");
    $resltrim = strlen($txtltrim);
    echo "A string [$txtltrim] tem $resltrim letras.";
    echo "<hr>";
    echo "Uso do rtrim<br>";
    $txtrtrim = rtrim($txt, "&nbsp");
    $resrtrim = strlen($txtrtrim);
    echo "A string [$txtrtrim] tem $resrtrim letras.";
    ?>
</div>
</body>
</html>
 
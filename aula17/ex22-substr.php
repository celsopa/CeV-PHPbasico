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
    $site = "Curso em Video de PHP";
    $ini = 6;
    $qtd = 5;
    $fat1 = substr($site, $ini,$qtd);
    echo "$site<br>";
    echo "<hr>";
    echo "A substring iniciando na posição $ini, com $qtd caracteres é:<br> [$fat1].<br>";

    ?>
</div>
</body>
</html>
 
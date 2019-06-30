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
    $a = "Celso";
    $a_pad = str_pad($a, 12, "*", STR_PAD_RIGHT);
    echo "$a<br>";
    echo "<hr>";
    echo "Nova string com 12 caracteres, completados a direita: $a_pad.<br>";
    echo "<br>";
    $a_pad = str_pad($a, 12, "*", STR_PAD_LEFT);
    echo "Nova string com 12 caracteres,completados a esquerda: $a_pad.<br>";
    echo "<br>";
    $a_pad = str_pad($a, 12, "*", STR_PAD_BOTH);
    echo "Nova string com 12 caracteres,completados em ambos lados: $a_pad.<br>";
    echo "<br>";

    ?>
</div>
</body>
</html>
 
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
    $frase = "Gosto de estudar matemática. De ESTUDAR programação. Estudar tudo.";
    $alvo = "estudar";
    $nova = "aprender";
    $res = str_ireplace($alvo, $nova,$frase);
    echo "$frase<br>";
    echo "<hr>";
    echo "Trocando a palavra [$alvo] por [$nova] ...<br>";
    echo "<hr>";
    echo "Novo texto: $res<br>";
    echo "<br>";

    ?>
</div>
</body>
</html>
 
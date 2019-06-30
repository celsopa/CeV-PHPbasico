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
    $txt = "Vivamus magna justo. Audaces fortuna juvat.";
    $qtd0 = str_word_count($txt, 0);
    $qtd1 = str_word_count($txt, 1);
    $qtd2 = str_word_count($txt, 2);
    echo "A string [$txt] tem $qtd0 palavras.";
    echo "<hr>";
    print_r($qtd1);
    echo "<hr>";
    print_r($qtd2);

    ?>
</div>
</body>
</html>
 
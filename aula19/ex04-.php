<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8"/>
    <title>Curso de PHP - Curso em Vídeo</title>
    <link rel="stylesheet" href="_css/estilo.css"/>
</head>
<body>
<div>
    <pre>
    <?php
    // adicionando elemento no final do array

    $n = array(1, 3, "14", "A", 27, 23);
    print_r($n);
    echo " Adicionando elemento ao fim do array:<br> \$n[] = \"Z\";<br>";
    $n[] = "Z";
    print_r($n);

    ?>
    </pre>
</div>
</body>
</html>
 
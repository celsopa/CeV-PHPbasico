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
    // ordenação associativa - não altera os índices do array

    $n = array(1, 42, 14, 32, 27,9, 23);
    print_r($n);
    echo "Ordenando elementos do array:<br>asort(\$n)<br>";
    asort($n);
    print_r($n);

    ?>
    </pre>
</div>
</body>
</html>
 
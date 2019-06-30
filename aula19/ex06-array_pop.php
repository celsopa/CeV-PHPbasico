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
    // removendo elemento no final do array

    $n = array(1, 3, "14", "A", 27, 23);
    print_r($n);
    echo " Removendo elemento do fim do array:<br>array_pop(\$n)<br>";
    array_pop($n);
    print_r($n);

    ?>
    </pre>
</div>
</body>
</html>
 
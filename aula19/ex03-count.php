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
    //    count

    $n = array(1, array(1,2), 3, "14", "A", 27, 23);
    $qtd = count($n);
    echo "O vetor tem $qtd elementos.<br>";
    echo "<pre>";
    print_r($n);
    echo "</pre>";
    ?>

</div>
</body>
</html>
 
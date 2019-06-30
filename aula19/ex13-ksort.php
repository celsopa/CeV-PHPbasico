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
    // ordenação pelos índices do array

    $n = array(1 => "a", 42 => "b", 14 =>"c", 32=>"d", 27 =>"e",9 =>"f", 23=>"g");
    print_r($n);
    echo "Ordenação dos índices do array:<br>ksort(\$n)<br>";
    ksort($n);
    print_r($n);

    ?>
    </pre>
</div>
</body>
</html>
 
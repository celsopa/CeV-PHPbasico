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
    $x[0] = 5;
    $x[1] = 2;
    $x[2] = 1;
    print_r($x);

    echo "<hr>";
    $v = array(3, 4, 7, 8);
    print_r($v);

    echo "<hr>";
    $d = array(3, 4, 7, 8);
    var_dump($d);
    echo "<br>";
    var_dump($d[1]);

    echo "<hr>";
    $e = array(3, 4, 7, 8);
    var_export($e);
    echo "<br>";
    var_export($e[1]);
    ?>
</div>
</body>
</html>
 
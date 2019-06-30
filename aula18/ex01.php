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
    $numeros = array(1,8,6,5,7,4,9);
    $numeros[] = 99;
    for ($i = 0 ; $i < count($numeros);$i++) {
        echo "$numeros[$i]<br>";
    }
    ?>
</div>
</body>
</html>
 
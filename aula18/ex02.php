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
    $teste = range(3,28,6);
    for ($i = 0 ; $i < count($teste);$i++) {
        echo "$teste[$i]<br>";
    }
    ?>
</div>
</body>
</html>
 
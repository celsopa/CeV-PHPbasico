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
    $txt = "Vivamus - magna - justo. Audaces - fortuna - juvat.";
    $res = explode(" - ", $txt);
    print_r($res);
    echo "<hr>";

    ?>
</div>
</body>
</html>
 
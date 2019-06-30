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
    $txt = "Estou aprendendo PHP no Curso em Video de PHP. Php é muito bom.";
    $qtd = substr_count($txt, "PHP"); //case sensitive
    echo "$txt<br>";
    echo "<hr>";
    echo "A string 'PHP' foi encontrada $qtd vezes.<br>";

    ?>
</div>
</body>
</html>
 
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8"/>
    <title>Curso de PHP - Curso em Vídeo</title>
    <link rel="stylesheet" href="_css/estilo.css"/>
</head>
<body>
<div>
    <h1>Raiz de um número</h1>
    <?php
    $val = $_GET["v1"];

    echo "A raíz de $val é igual a ".number_format(sqrt($val),2)."<br>"
    ?>
    <a href="ex01.html"><input type="button" value="VOLTAR"></a>
</div>
</body>
</html>
 
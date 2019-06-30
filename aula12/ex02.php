<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8"/>
    <title>Curso de PHP - Curso em Vídeo</title>
    <link rel="stylesheet" href="_css/estilo.css"/>
</head>
<body>
<div>
    <h2>Calculando Fatorial</h2>
    <?php
    $num = isset($_GET["num"]) && is_numeric($_GET["num"])? $_GET["num"] : 1;
    $fat = 1;
    echo "$num! =&nbsp&nbsp";
    do {
        $fat *= $num;
        echo "$num x ";
        $num--;
    } while ($num>1);
    echo "$num = $fat";
    ?>
    <hr>
    <a href="ex02.html"><input type="button" value="VOLTAR"></a>
</div>
</body>
</html>
 
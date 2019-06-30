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
    $num = isset($_GET["num"]) && is_numeric($_GET["num"])? $_GET["num"] : 1;
    $c = 1;
    echo "<h2>Tabuada de $num</h2>";
    do {
        echo "$num x $c = ".$num*$c."<br>";
        $c++;
    } while ($c<=10);

    ?>
    <hr>
    <a href="ex03html.php"><input type="button" value="VOLTAR"></a>
</div>
</body>
</html>
 
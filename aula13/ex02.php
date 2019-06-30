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
    echo "<h2>Tabuada de $num</h2>";
    for ($c = 1; $c <=10; $c++) {
        echo "$num x $c = ".$num*$c."<br>";

    };

    ?>
    <hr>
    <a href="ex02html.php"><input type="button" value="VOLTAR"></a>
</div>
</body>
</html>
 
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8"/>
    <title>Curso de PHP - Curso em Vídeo</title>
    <link rel="stylesheet" href="_css/estilo.css"/>
</head>
<body>
<div>
    <form action="ex02res.php" method="get">
    <?php
    $cont = 1;
    while ($cont <=5){
        echo "<label for='v$cont'>Valor $cont: </label><input type='number' name='v$cont' id='v$cont' min='0' max='100' required><br>";
        $cont++;
    }
    echo "<hr>";
    ?>
        <input type="submit" value="ENVIAR">
    </form>

</div>
</body>
</html>
 
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
    $i = 1;
    while ($i <=5){
        $v = "num".$i;
        $url = "v".$i;
        $$v = isset($_GET["$url"])?$_GET["$url"]:0;
        $i++;
    };

    $c = 1;
    while ($c <= 5){
        $v = "num".$c;
        if ($v){
            echo "Valor $c vale ".$$v."</br>";
        }
        $c++;
    }
    ?>
    <hr>
    <a href="ex02.php" class="botao">Voltar</a>
</div>
</body>
</html>
 
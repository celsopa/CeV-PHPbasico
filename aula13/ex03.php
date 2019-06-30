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
    $achou = 0;
    echo "<h2>$num é primo?</h2>";
    for ($c = 2; $c < $num; $c++) {
        if ($num%$c==0){
            $achou++;
            echo "$num NÃO é primo.<br> Primeiro divisor encotrado: $c <br>";
            break;
        }
    };

    if (!$achou){
        echo "$num É primo!<br>";
    }


    ?>
    <p>Um número é primo quando é divisível apenas por 1 ou por ele mesmo.</p>
    <hr>
    <a href="ex03.html"><input type="button" value="VOLTAR"></a>
</div>
</body>
</html>
 
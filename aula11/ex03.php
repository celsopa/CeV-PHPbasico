<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8"/>
    <title>Curso de PHP - Curso em Vídeo</title>
    <link rel="stylesheet" href="_css/estilo.css"/>
</head>
<body>
<div>
    <h2>Criando um contador</h2>
    <?php
    $ini = isset($_GET["inicio"])?$_GET["inicio"]:1;
    $fim = isset($_GET["fim"])?$_GET["fim"]:10;
    $step = isset($_GET["passo"])?$_GET["passo"]:1;

    echo "<h3>Início: <span class='foco'>$ini</span> Fim: <span class='foco'>$fim</span> Passo: <span class='foco'>$step</span></h3>";
    if ($ini < $fim){
        while ($ini <= $fim){
            echo "$ini&nbsp&nbsp";
            $ini +=$step;
        }
    } else {
        while ($ini >= $fim){
            echo "$ini&nbsp&nbsp";
            $ini -=$step;
        }
    }


    ?>
    <hr>
    <a href="javascript:history.go(-1)" class="botao">VOLTAR</a>
</div>
</body>
</html>
 
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
    function somar($a, $b){
        $s = $a+$b;
        echo "A soma $a + $b = $s<br>";
    }

    somar(5,6);
    somar(8,2);
    $x = 9;
    $y = 15;
    somar($x,$y);

    ?>
</div>
</body>
</html>
 
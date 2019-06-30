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
        return $s;
    }

    $x = 3;
    $y=4;
    $r1 = somar($x,$y);
    $r2 = somar(5,6);
    echo "$r1<br>";
    echo "$r2<br>";



    ?>
</div>
</body>
</html>
 
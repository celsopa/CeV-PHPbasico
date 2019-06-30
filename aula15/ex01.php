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
    function teste($x){
        $x += 2;
        echo "O valor de X é $x<br>";
    }

    $a = 3;
    teste($a);
    echo "Valor definido de A é $a <br>";
    echo "<hr>";
    function teste2ref(&$x){
        $x +=2;
        echo "O valor de X é $x <br>";
    }
    $b = 3;
    echo "Valor de B antes de chamar a funçao: $b<br>";
    teste2ref($b);
    echo "Valor definido de B é $b <br>";
    ?>
</div>
</body>
</html>
 
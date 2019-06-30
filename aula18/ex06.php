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
    $a2d = array(array(1,1),array(2,2),array(3,3),array(4,4));
    $a2d[1][1]= 5;

    foreach ($a2d as $k => $v ){
        foreach ($v as $vk => $vv){
            echo "O array $k tem o a chave $vk e valor $vv.<br>";
        }
        echo "<br>";
    }



    ?>
</div>
</body>
</html>
 
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
    function somar(){
        $parcela = func_get_args();
        $qtd = func_num_args();
        $res = 0;
        for($i = 0; $i <$qtd; $i++){
            $res += $parcela[$i];
        };
        return $res;
    }
    $resultado = somar(1,2,8,9);

    echo "$resultado<br>";
    ?>
</div>
</body>
</html>
 
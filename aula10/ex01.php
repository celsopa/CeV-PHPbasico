<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8"/>
    <title>Curso de PHP - Curso em Vídeo</title>
    <link rel="stylesheet" href="_css/estilo.css"/>
</head>
<body>
<div>
    <h2>Vamos calcular</h2>
    <?php
        $num = isset($_GET["num"]) && is_numeric($_GET["num"])? $_GET["num"]:1;
        $op = isset($_GET["op"])?$_GET["op"]:1;

        switch ($op){
            case "1":
                echo "O dobro de $num é ".$num*2 .".";
                break;
            case "2":
                echo "O cubo de $num é ".$num**3 .".";
                break;
            case "3":
                echo "A raiz quadrada de $num é ".sqrt($num).".";
                break;
        }

    ?>
    <br>
    <a href="ex01.html"><input type="button" value="VOLTAR"></a>
</div>
</body>
</html>
 
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8"/>
    <title>Curso de PHP - Curso em Vídeo</title>
    <link rel="stylesheet" href="_css/estilo.css"/>
</head>
<body>
<div>
    <h2>Vamos à escola?</h2>
    <?php
        $dia = isset($_GET["dia"]) && is_numeric($_GET["dia"])? $_GET["dia"]:-1;

        switch ($dia){
            case "1":
                echo "Domingão! Vamos ficar em casa.";
                break;
            case "2":
            case "3":
            case "4":
            case "5":
            case "6":
            echo "Acorda muleke, dia de estudar!!!";
            break;
            case "7":
                echo "É sábado, dia de curtir uma praia.";
                break;
            default:
                echo "Parâmetro não recebido.";
        }

    ?>
    <br>
    <a href="javascript:history.go(-1)"><input type="button" value="VOLTAR"></a>
</div>
</body>
</html>
 
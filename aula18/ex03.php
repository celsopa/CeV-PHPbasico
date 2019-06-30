<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8"/>
    <title>Curso de PHP - Curso em Vídeo</title>
    <link rel="stylesheet" href="_css/estilo.css"/>
</head>
<body>
<div>
    <table border="1">

            <?php
            $numeros = array(1, 8, 6, 5, 7, 4, 9);
            $numeros[] = 99;
            echo "<tr><td>CHAVE</td><td>VALOR</td><tr>";
            foreach ($numeros as $item) {
                echo "<tr><td>".array_search($item,$numeros)."</td><td>$item</td><tr>";
            }
            ?>
        </tr>
    </table>
</div>
</body>
</html>
 
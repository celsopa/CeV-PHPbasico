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
        $celso = array("nome" => "Celso", "idade" => 32, "curso" => "SI", "peso" => 105.45, 1 => "numero");
        echo "<br><br>";
        echo "<tr><td>CHAVE</td><td>VALOR</td></tr>";
        foreach ($celso as $i) {
            echo "<tr><td>" . array_search($i, $celso) . "</td><td>$i</td></tr>";
        }
        ?>
    </table>
    <hr>
    <table border="1">
        <?php
        $celso2 = array("nome" => "Celso", "idade" => 32, "curso" => "SI", "peso" => 105.45, 1 => "numero");
        echo "<br><br>";
        echo "<tr><td>CHAVE</td><td>VALOR</td></tr>";
        foreach ($celso2 as $k => $v) {
            echo "<tr><td>$k</td><td>$v</td></tr>";
        }
        ?>
    </table>
</div>
</body>
</html>
 
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
        $celso = array(1 => "C", 3 => "E", 4 => "L", 7 => "S", 14 => "O");
        $celso[] = ".";
        print_r($celso);
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
        $txt2 = array(1 => "C", 3 => "E", 4 => "L", 7 => "S", 14 => "O");
        $txt2[] = ".";
        unset($txt2[4]);
        print_r($txt2);
        echo "<br><br>";
        echo "<tr><td>CHAVE</td><td>VALOR</td></tr>";
        foreach ($txt2 as $c) {
            echo "<tr><td>" . array_search($c, $txt2) . "</td><td>$c</td></tr>";
        }
        ?>
    </table>
</div>
</body>
</html>
 
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8"/>
    <title>Analisando notas</title>
    <link rel="stylesheet" href="_css/estilo.css"/>
</head>
<body>
<div>
    <h2>Analisando situação do aluno</h2>
    <?php
    $n1 = isset($_GET["n1"]) && is_numeric($_GET["n1"])? $_GET["n1"] : 0;
    $n2 = isset($_GET["n2"]) && is_numeric($_GET["n2"]) ? $_GET["n2"] : 0;
    $media = ($n1 + $n2) / 2;
    $situacao = "";

    if ($media < 5) {
        $situacao = "REPROVADO";
    } else if ($media < 7) {
        $situacao = "EM RECUPERAÇÃO";
    } else {
        $situacao = "APROVADO";
    }

    echo "Nota 01: <span class='foco'>$n1</span> Nota 02: <span class='foco'>$n2</span><br>";
    echo "Média do aluno: <span class='foco'>$media</span><br>";
    echo "Situação do aluno: <span class='foco'>$situacao</span>";
    ?>
    <br>
    <a href="ex02.html"><input type="button" value="Voltar"></a>
</div>
</body>
</html>
 
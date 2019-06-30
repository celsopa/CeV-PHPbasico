<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8"/>
    <title>Analisando a idade</title>
    <link rel="stylesheet" href="_css/estilo.css"/>
</head>
<body>
<div>
    <h1>Analisando situação</h1>
    <?php
    $nasc = isset($_GET["nasc"]) && is_numeric($_GET["nasc"])?$_GET["nasc"]:date('Y');
    $idade = date('Y') - $nasc;

    if ($idade == 1){
        echo "Com $idade ano você não pode votar nem dirigir.";
    } else if ($idade < 16){
        echo "Com $idade anos você não pode votar nem dirigir.";
    } else if ($idade <18){
        echo "Com $idade anos você já pode votar mas não pode dirigir.";
    } else if ($idade<65){
        echo "Com $idade anos você é obrigado a votar e pode dirigir.";
    } else {
        echo "Com $idade anos você pode votar e pode dirigir.";
    }

    ?>
    <br>
    <a href="ex01.html"><input type="button" value="Voltar"></a>
</div>
</body>
</html>
 
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8"/>
    <title>Curso de PHP - Curso em Vídeo</title>
    <link rel="stylesheet" href="_css/estilo.css"/>
</head>
<body>
<div>
    <h1>Dados de uma pessoa</h1>
    <?php
    $nome = isset($_POST["nome"]) ? $_POST["nome"] : "[não informado]";
    $nascimento = isset($_POST["nascimento"]) && is_numeric($_POST["nascimento"])? $_POST["nascimento"] : 0;
    $idade = date("Y") - $nascimento;
    $sexo = isset($_POST["sexo"]) ? $_POST["sexo"] : "[não informado]";

    echo "$nome tem $idade anos e é do sexo $sexo.";
    echo "<br>"
    ?>
    <a href="ex02.html"><input type="button" value="VOLTAR"></a>
</div>
</body>
</html>
 
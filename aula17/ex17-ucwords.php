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
    $nome = "celSo arUJo.";
    echo "Nome normal: $nome.<br>";
    echo "Seu nome é ".ucwords($nome);

    echo "<hr>";
    $nome2 = "cesar araujo";
    echo "Nome normal: $nome2.<br>";
    $nome2 = ucwords($nome2);
    echo "Seu nome é $nome2.";

    echo "<hr>";
    $nome3 = "ceSAr araUo";
    echo "Nome normal: $nome3.<br>";
    $nome3 = ucwords(strtolower($nome3));
    echo "Seu nome é $nome3.";



    ?>
</div>
</body>
</html>
 
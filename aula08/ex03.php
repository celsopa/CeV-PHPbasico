<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <?php
    $texto = isset($_POST["t"]) && ($_POST["t"] != "") ? $_POST["t"] : "Texto genérico";
    $tam = isset($_POST["tam"]) ? $_POST["tam"] : "12pt";
    $cor = isset($_POST["cor"]) ? $_POST["cor"] : "#00f";
    ?>
    <meta charset="UTF-8"/>
    <title>Curso de PHP - Curso em Vídeo</title>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <style>
        span.texto {
            color: <?php echo $cor?>;
            font-size: <?php echo $tam?>;
        }
    </style>
</head>
<body>
<div>
    <h1>Gerando um texto formatado</h1>
    <?php
    echo "<span class='texto'>$texto</span>";
    echo "<br>"
    ?>
    <a href="ex03.html"><input type="button" value="VOLTAR"></a>
</div>
</body>
</html>
 
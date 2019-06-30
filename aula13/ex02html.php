<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8"/>
    <title>Curso de PHP - CursoemVideo.com</title>
    <link rel="stylesheet" href="_css/estilo.css"/>
</head>
<body>
<div>
    <h2>Tabuada</h2>
    <form action="ex02.php" method="get">
        <label for="num">Número: </label>
        <select name="num" id="num">
            <?php
            for ($c = 1; $c <=10; $c++) {
                echo "<option value=\"$c\">$c</option>";
            };
            ?>
        </select>
        <input type="submit" value="Exibir">
    </form>
</div>
</body>
</html>
 
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
    <form action="ex03.php" method="get">
        <label for="num">Número: </label>
        <select name="num" id="num">
            <?php
            $c = 1;
            do {
                echo "<option value=\"$c\">$c</option>";
                $c++;
            } while ($c <= 10);
            ?>
        </select>
        <input type="submit" value="Exibir">
    </form>
</div>
</body>
</html>
 
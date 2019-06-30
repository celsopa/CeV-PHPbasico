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
    $v1 = $_GET["x"]; // Atribui à variável v1 o valor de 'x' passado por parametro na URL
    $v2 = $_GET["y"]; // Atribui à variável v2 o valor de 'y' passado por parametro na URL

/*   abs() - exibe o valor absoluto de um número
 *   pow() - calcula a potência (base, expoente)
 *   sqrt() - calcula raiz quadrada
 *   round() - arredonda um número real seguindo a regra de aproximação
 *   ceil() - arredonda um número real para cima
 *   floor() - arredonda um número real para baixo
 *   intval() - pega a parte inteira de um número real
 *   number_format() - formata um número
 */

    echo "<h2>Valores recebidos: </br>v1 = $v1 e v2 = $v2</h2>";
    echo "|$v1| = ".abs($v1)."</br>";
    echo "|$v2| = ".abs($v2)."</br></br>";
    echo intval($v1)."<sup>".intval($v2)."</sup> = ".pow(intval($v1),intval($v2))."</br></br>";
    echo "A raíz quadrada de ".intval($v1)." = ".sqrt(intval($v1))."</br>";
    echo "A raíz quadrada de ".intval($v2)." = ".sqrt(intval($v2))."</br></br>";
    echo "O valor de $v1 arredondado é ".round($v1)."</br>";
    echo "O valor de $v2 arredondado é ".round($v2)."</br></br>";
    echo "O valor de $v1 arredondado para cima é ".ceil($v1)."</br>";
    echo "O valor de $v2 arredondado para baixo é ".floor($v2)."</br></br>";
    echo "A parte inteira de $v1 é ".intval($v1)."</br>";
    echo "A parte inteira de $v2 é ".intval($v2)."</br></br>";
    echo "O valor de $v1 em moeda é R$".number_format($v1, 2,",",".")."</br>";

    ?>
</div>
</body>
</html>
 
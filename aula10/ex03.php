<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8"/>
    <title>Curso de PHP - Curso em Vídeo</title>
    <link rel="stylesheet" href="_css/estilo.css"/>
</head>
<body>
<div>
    <h2>Estados do Brasil</h2>
    <?php
        $uf = isset($_GET["uf"])? $_GET["uf"]:"";

        switch ($uf){
            case "AL":
            case "BA":
            case "CE":
            case "MA":
            case "PB":
            case "PE":
            case "PI":
            case "RN":
            case "SE":
                echo "Você é de <span class='foco'>$uf</span>.<br>";
                echo "E mora na região <span class='foco'>Nordeste</span>.";
                break;
            case "AC":
            case "AP":
            case "AM":
            case "PA":
            case "RO":
            case "RR":
            case "TO":
                echo "Você é de <span class='foco'>$uf</span>.<br>";
                echo "E mora na região <span class='foco'>Norte</span>.";
                break;
            case "DF":
            case "GO":
            case "MT":
            case "MS":
                echo "Você é de <span class='foco'>$uf</span>.<br>";
                echo "E mora na região <span class='foco'>Centro-Oeste</span>.";
                break;
            case "ES":
            case "MG":
            case "RJ":
            case "SP":
                echo "Você é de <span class='foco'>$uf</span>.<br>";
                echo "E mora na região <span class='foco'>Sudeste</span>.";
                break;
            case "PR":
            case "SC":
            case "RS":
                echo "Você é de <span class='foco'>$uf</span>.<br>";
                echo "E mora na região <span class='foco'>Sul</span>.";
                break;
            default:
                echo "Parâmetro não recebido.";
        }
    ?>
    <br>
    <a href="javascript:history.go(-1)" class="botao">VOLTAR</a>
</div>
</body>
</html>
 
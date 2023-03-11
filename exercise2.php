<html>    
<head>
    <title>EXERCÍCIO 2</title>
    <meta charset="utf-8">
</head>
<body>
<form method="post">
    <p>Digite um número entre 1 e 12:</p>
    <input type="number" name="numero" id="numero"><br>
    <input type="submit" value="Inserir">
</form>
<?php
    $numero = $_POST["numero"];
//se declara uma variavel com vários valores (cases)
    switch ($numero) 
    {
        case 1:
            echo "Janeiro";
            break;
        case 2:
            echo "Fevereiro";
            break;
        case 3:
            echo "Março";
            break;
        case 4:
            echo "Abril";
            break;
        case 5:
            echo "Maio";
            break;
        case 6:
            echo "Junho";
            break;
        case 7:
            echo "Julho";
            break;
        case 8:
            echo "Agosto";
            break;
        case 9:
            echo "Setembro";
            break;
        case 10:
            echo "Outubro";
            break;
        case 11:
            echo "Novembro";
            break;
        case 12:
            echo "Dezembro";
            break;
        default:
            echo "Não existe mês com este número.";
            break;
    }
    echo "<a href='links.php'><br><br>VOLTAR</a>";
?>
</body>
</html>
